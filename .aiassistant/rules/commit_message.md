---
apply: always
---

## Commit message rules

- Keep it concise. Skip unnecessary details.
- Review the diff first, then compose the message.
- Specify exactly what was changed in the code.
- Use a single-line header only; do not add a body.
- Write in English only.
- Be as brief as you can.
- Aim for up to 70 characters (including any markup).
- Absolute cap: 100 characters for the header (including any markup).
- Do not end the header line with a dot.
- Enclose class names, variables, and attributes in backticks `like_this`. Example: Changed the type of `$foo` in class `Bar`.
- Start the header with an action verb that fits the change: added, changed, updated, fixed, improved, translated, removed, deleted, etc.
- Describe the direct edits made to the code, not their outcomes or effects.
- For class names and namespaces, omit leading and trailing backslashes.
- For changes in the `docs` folder or `README.md`, always prefix the header with `[docs]: `.
- For changes in the `source` folder, always prefix the header with `[source]: `.
- For changes in the `locales` folder, always prefix the header with the affected locale subfolder names using `[<locales>]: `, e.g., `[fr]: `, `[de,zh_CN]: `, etc.
- For changes in all other folders, always prefix the header with `[app]: `.
