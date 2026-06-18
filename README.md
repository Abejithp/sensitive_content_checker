# Sensitive Content Warning

The **Sensitive Content Warning** module is a custom Drupal module designed to protect users from viewing sensitive or objectionable content. It provides a flexible and user-friendly way to obscure content until users explicitly choose to reveal it.

Administrators can define elements using CSS classes or IDs, which are then covered by a customizable overlay containing a warning message, descriptive text, and a **"See Content"** button. This allows sites to manage sensitive content while maintaining a positive user experience.

## Features

- Obscure content using configurable CSS classes or IDs
- Customizable overlay with:
  - Warning header
  - Description text
  - "See Content" button
- Dynamic frontend behavior powered by JavaScript
- One-click content reveal for users
- Administrative configuration interface for managing blocked elements
- Integration with the Context module for advanced display conditions
- Support for various Drupal content types and layouts
- Accessible design using semantic HTML and high-contrast styling
- Compatible with complex Drupal themes and site structures

## How It Works

1. Administrators configure CSS classes or IDs that should be hidden.
2. The module detects matching elements on the page.
3. A warning overlay is dynamically applied to the targeted content.
4. Users can click **"See Content"** to dismiss the overlay and reveal the content.
5. Context module integration allows content warnings to be displayed conditionally based on:
   - User roles
   - Specific pages
   - Taxonomy terms
   - Other contextual conditions

---

## Requirements

### Required

- Drupal Core 9.x or 10.x
- Taxonomy module (Drupal core)
- Block module (Drupal core)
- JavaScript and CSS enabled

### Optional

- Context module (for automated conditional placement of the warning block)

### Content Configuration

- A custom **Viewer Override** field must be added to content types.
- Content that should be obscured must be tagged with the designated sensitive content taxonomy term.

### Permissions

Administrators and content editors should have permissions to:

- Manage taxonomy terms
- Configure module settings
- Edit content and assign sensitive content terms

---

## Installation

1. Place the module in your Drupal installation's `modules/custom` directory.
2. Enable the module from:

   ```
   Administration → Extend
   ```

   or visit:

   ```
   /admin/modules
   ```

3. Clear Drupal caches.

---

## Configuration

### 1. Create a Sensitive Content Taxonomy Term

Navigate to:

```
Administration → Structure → Taxonomy
```

Create a taxonomy term such as:

```
Sensitive Content
```

This term will be used to identify content that should display the warning overlay.

### 2. Configure Blocked Elements

Navigate to:

```
Administration → Configuration → Media → Sensitive Content Warning
```

Add the CSS classes or IDs of elements you want the module to obscure.

Example:

```text
.article-sensitive
#sensitive-image
```

### 3. Configure Context (Optional)

If using the Context module:

1. Navigate to:

   ```
   /admin/structure/context/add
   ```

2. Create a new context.
3. Add a condition that activates when content contains the **Sensitive Content** taxonomy term.
4. Add a reaction that places the **Sensitive Content Block** in the desired region.

### 4. Configure Content

When creating or editing content:

1. Add the **Sensitive Content** taxonomy term to the Viewer Override field.
2. Save the content.

The module will automatically apply the overlay when the content is displayed.

---

## Customization

### Styling

Customize the appearance of the warning overlay by editing:

```text
css/sensitive-content.css
```

### Behavior

Modify frontend functionality by editing:

```text
js/sensitive-content.js
```

---

## Verification

After configuration:

1. Visit a page containing content marked as sensitive.
2. Confirm that the overlay is displayed.
3. Click **"See Content"** to verify that the content is revealed correctly.

---

## Accessibility

The module prioritizes accessibility by providing:

- Semantic HTML structure
- High-contrast text and controls
- Keyboard-accessible interactions
- Compatibility with modern web accessibility standards

---
