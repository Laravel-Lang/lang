# General information

Project: Laravel-Lang / lang

This document captures project-specific knowledge to help advanced contributors set up, test, and develop efficiently. It focuses on tools, commands, and conventions that are unique to this repository.

## Build / Configuration

- Runtime requirements
  - PHP: ^8.2. The test suite uses PHPUnit ^11|^12.
  - PHP extensions: ext-json.
  - Composer 2.x.
  - Node.js is optional and only needed for Biome (JSON/JS formatting) and npm-related codestyle tasks.

- Installation
  - Install PHP and Composer as usual.
  - From the repository root:
    - composer install
  - The repository ships a composer.lock; use --prefer-dist for faster installs in CI/CD if desired.

- Autoloading
  - Production code: PSR-4 autoload for namespace LaravelLang\Lang\ -> src/ (composer.json → autoload).
  - Tests: PSR-4 dev autoload for namespace Tests\ -> tests/ (composer.json → autoload-dev).

- Laravel integration
  - The package provides a ServiceProvider (LaravelLang\Lang\ServiceProvider) declared under extra.laravel.providers to allow auto-discovery in Laravel apps.

- Scripts / toolchain
  - composer scripts
    - format → runs vendor/bin/lang sync and then @style (Pint). Use when synchronizing locales from sources.
    - style → vendor/bin/pint --parallel (applies PHP code style rules defined in pint.json).
    - post-update-cmd → runs codestyler tasks and composer normalize on dependency updates. You generally don’t call this directly.
  - Pint (pint.json)
    - Preset: laravel with several project-specific rules, including declare_strict_types, fully_qualified_strict_types, php_unit_method_casing=camel_case, binary_operator_spaces alignment minimal, and multiple PHP migration rule sets (@PHP8xMigration).
    - Excludes tests/Fixtures from styling.
  - Biome (biome.json)
    - Used for JSON/JS formatting and linting outside of vendor/node_modules/etc.
    - VCS integration disabled; it won’t honor .gitignore by default (useIgnoreFile=false). The config explicitly excludes node_modules, vendor, and several root files.

## Testing

- Framework / configuration
  - PHPUnit is configured via phpunit.xml at the project root.
  - Bootstrap: vendor/autoload.php
  - Env: APP_KEY is set in phpunit.xml; you generally don’t need to export env vars for tests.
  - Source includes: ./src is included for code coverage/resolution.
  - The suite depends on laravel-lang/status-generator for its base TestCase; see tests/PluginTest.php extending LaravelLang\StatusGeneratorTests\TestCase.

- Running tests
  - Full suite:
    - vendor\bin\phpunit -c phpunit.xml --testdox
  - Filter by class or test name (useful for quick feedback):
    - vendor\bin\phpunit -c phpunit.xml --filter PluginTest --testdox
  - On Windows PowerShell, mind backslashes in paths; on *nix, use forward slashes.

- Adding tests
  - Namespaces: place tests under namespace Tests; files in tests/ are autoloaded via composer.json autoload-dev.
  - Base test class options:
    1) For repository-internal, framework-agnostic checks, extend PHPUnit\Framework\TestCase directly.
    2) For integration with the project’s locale/status infrastructure, extend LaravelLang\StatusGeneratorTests\TestCase (see tests/PluginTest.php) to leverage the helpers and fixtures provided by the status-generator package.
  - Test naming / conventions:
    - Use camelCase for test methods (enforced via pint rule php_unit_method_casing=camel_case).
    - Declare strict types in test files (declare(strict_types=1);) per coding style.

- Example: Creating and running a simple test (validated)
  - Minimal example (PHPUnit-only):
    - File: tests/DemoExampleTest.php
    - Content:
      <?php
      declare(strict_types=1);
      namespace Tests;
      use PHPUnit\Framework\TestCase;
      final class DemoExampleTest extends TestCase
      {
          public function test_it_runs_a_trivial_assertion(): void
          {
              $this->assertSame(2, 1 + 1);
          }
      }
  - Run just this test:
    - vendor\bin\phpunit -c phpunit.xml --filter DemoExampleTest --testdox
  - Note: This example was created and executed during documentation authoring and then removed to keep the repository clean.

## Additional Development Information

- Repository purpose
  - This package provides and maintains language resources for Laravel and related first-party packages. Locales live under locales/. The source/ directory holds inputs used to generate/update locales; automation is handled by laravel-lang/publisher and related tools.

- Directory overview
  - src/ — Package code, including the ServiceProvider and any helpers used at runtime.
  - source/ — Data sources used to generate translation files (don’t edit generated outputs directly without understanding the pipeline).
  - locales/ — Generated/maintained translation artifacts per locale (e.g., php-inline.json, json.json, _excludes.json). Some files may be machine-maintained; use sync tooling to update.
  - tests/ — Test suite; currently includes PluginTest which relies on status-generator’s BaseTestCase.
  - docs/ — Additional project/user documentation.

- Locale synchronization / formatting
  - To regenerate/synchronize locale files from sources:
    - composer run format
    - This executes vendor/bin/lang sync and then applies Pint styling via the style script.
  - After changes to translation data, always run Pint to keep code style consistent:
    - composer run style

- Coding standards
  - PHP files should include declare(strict_types=1); at the top (enforced by Pint rule declare_strict_types).
  - Use the laravel preset plus customizations defined in pint.json. Specifics worth noting:
    - fully_qualified_strict_types=true: import and use FQCNs consistently.
    - phpdoc and blank line rules tailored for readability (blank_line_before_statement for declare/phpdoc/continue/return).
    - class layout preferences (class_attributes_separation, class_definition).
    - Operator and type ordering preferences (binary_operator_spaces, ordered_types).

- JSON and JS formatting
  - Use Biome for formatting/linting JSON and small JS tooling if present:
    - npx @biomejs/biome format .
    - The biome.json config sets 4-space indentation, double quotes for JS, and JSON formatting preferences.

- Common pitfalls / notes
  - Ensure PHP >= 8.2; older PHP versions are unsupported (composer.json require section).
  - The test suite uses a third-party base test case from laravel-lang/status-generator; make sure dev dependencies are installed (composer install without --no-dev if you intend to run tests locally).
  - Some directories/files are generated; avoid manual edits to generated locale files unless you know the generator flow. Prefer updating source data and running composer run format.

- Commit/PR hygiene
  - Keep diffs minimal; run composer run style before committing to satisfy Pint rules.
  - If you modify JSON/JS configs or locale JSON, run Biome to normalize formatting.
  - Follow conventional commit practices if contributing to upstream; see .aiassistant/rules/commit_message.md for automation expectations.

Verification notes
- The full test suite was executed successfully with: vendor\bin\phpunit -c phpunit.xml --testdox
- A demonstration test (tests/DemoExampleTest.php) was created, executed, and removed. The commands and example in this guideline are confirmed to work on Windows with PHP 8.4 and PHPUnit 12.

## Localization translation rules

- When translating files, follow the folder name mapping for the target language. See the .aiassistant/rules/locales.md file for the mapping list.
- The localization folder name follows the ISO-639-1 standard. Translate into the language that corresponds to this locale code.
- Don’t translate files whose names start with the `_` character.
- Keep the keys themselves untranslated, even if they contain sentences.
- If a translated value is identical to the English variant, add this value to the `_excludes.json` file.
- If a sentence starts with a placeholder (begins with the `:` character), write it with an initial capital letter. For example, `":Attribute est déjà attaché(e)."`.
- Consider the usage context when translating. These values are intended to be displayed on a website page in select fields, informational notifications, UI elements, etc.
- After finishing the translation, sort the contents of the modified JSON files in alphabetical order.
- Don't run unit tests and/or code-style after translation.
- Files `*-inline.json` differ from the others in that they contain translations without mentioning the name of the attribute or field. For example:
  - `*.json`:
    - The :attribute field must only contain letters.
    - The :attribute field must have :value items or more.
  - `*-inline.json`:
    - The value must only contain letters.
    - This field must contain :value items or more.
- Follow the current English wording verbatim, preserving placeholders (e.g., :attribute, :value, etc.).
- When translating, refer to the original text located in the `locales/en/*.json` files:
  - `locales/*/json.json` with `locales/en/json.json`
  - `locales/*/json-inline.json` with `locales/en/json-inline.json`
  - `locales/*/php.json` with `locales/en/php.json`
  - `locales/*/php-inline.json` with `locales/en/php-inline.json`
- Translate only the phrases that are written in English. Previously translated phrases don’t need to be rephrased unless otherwise specified.
- Translate all the specified files in a single commit.
- The list of untranslated words and phrases for localizations is located in the `docs/statuses` folder. The file name corresponds to the locale code from the `locales` folder. Inside each file, there is an HTML table in which the first column contains the key name from the JSON files, and the second column contains the value to be translated.

### How to translate words and phrases

1. Open the required locale file in the `docs/statuses` folder and study it carefully.
2. Find these phrases in the localization JSON files to be translated.
3. Translate the words and phrases, writing them into the JSON files where they were specified.
4. Run the console command `vendor/bin/lang status` to update the translation status. You must run this command.
5. Based on the results of the console command, check the contents of the locale's Markdown file in the `docs/statuses` folder.
6. If the Markdown file contains the entry `All missed: 0`, finish the translation work. If it doesn’t, proceed to translate the phrases listed in the file and repeat the steps starting from point 2.
