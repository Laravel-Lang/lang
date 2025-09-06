---
apply: always
---

## Commit message rules

- Keep it short. Do not add extra details.
- First, look through the changed files. Then write the message.
- State exactly what the code was changed to do.
- Use one single header line. Do not add a body.
- Write the message in English only.
- Make it as brief as possible.
- Target length: up to 70 characters (count any markup too).
- Hard limit: 100 characters for the header (count any markup too).
- Do not end the header line with a period.
- Put class names, variables, and attributes in backticks `like_this`. Example: The type of `$foo` in class `Bar` was changed.
- Start the header with a verb that matches the change: added, changed, updated, fixed, improved, translated, removed, deleted, etc.
- Describe the direct code edits, not their effects or results.
- For class names and namespaces, do not include leading or trailing backslashes.
- If the change is in the `docs` folder or `README.md`, prefix the header with `[docs]: `.
- If the change is in the `source` folder, prefix the header with `[source]: `.
- If the change is in the `locales` folder, prefix the header with the affected locale subfolder names using `[<locales>]: `, e.g., `[fr]: ` or `[de,zh_CN]: `.
- For changes in any other folders (not `docs`, `source`, or `locales`), always prefix the header with `[app]: `.
