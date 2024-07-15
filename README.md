# Snippets
Snippets is a versatile WordPress plugin designed to help you manage and insert reusable content blocks, called snippets, into your website. This plugin allows you to create a custom post type for snippets and easily insert them into posts and pages using shortcodes. Additionally, you can display a specific snippet, randomly select one from a list of snippet IDs, or randomly display snippets from a specified category for dynamic content display.

#### Key Features

1. **Custom Post Type for Snippets**:
   - Creates a custom post type called "snippets".
   - Allows you to create, edit, and manage snippets within the WordPress admin interface.
   - Supports titles, content, featured images, and revisions, similar to regular posts.

2. **Shortcode for Easy Insertion**:
   - Use the shortcode `[snippet id="SNIPPET_ID"]` to insert a specific snippet into a post or page.
   - Use the shortcode `[snippet ids="ID1,ID2,ID3"]` to randomly display one snippet from a list of IDs.
   - Use the shortcode `[snippet category="CATEGORY_SLUG"]` to randomly display one snippet from a specified category.

3. **User-Friendly Interface**:
   - Dedicated section in the WordPress admin menu for managing snippets.
   - Intuitive interface for creating and organizing snippets.

4. **Flexible Content Management**:
   - Use snippets for commonly used text blocks, code snippets, disclaimers, promotional content, etc.
   - Maintain consistency and save time by updating recurring content in one place.

5. **Taxonomy Support**:
   - Categorize and tag snippets using WordPress's built-in taxonomy features for better organization and searchability.

#### Examples

1. **Single Snippet**:
   ```plaintext
   [snippet id="123"]
   ```

2. **Random Snippet from Multiple IDs**:
   ```plaintext
   [snippet ids="123, 456, 789"]
   ```

3. **Random Snippet from a Category**:
   ```plaintext
   [snippet category="announcements"]
   ```

In the second example, one of the snippets with IDs `123`, `456`, or `789` will be randomly selected and displayed. In the third example, a random snippet from the category with the slug `announcements` will be selected and displayed.

#### Benefits

- **Reusable Content**: Easily manage and reuse content across multiple posts and pages.
- **Consistency**: Maintain consistent information throughout your site by updating the snippet once and reflecting the changes everywhere it's used.
- **Efficiency**: Save time by creating snippets once and using them in multiple locations without duplicating effort.
- **Dynamic Content**: Display random snippets from a list of IDs or a category for more dynamic content presentation.

The "Snippets" plugin is a powerful tool for WordPress users who need a simple and efficient way to manage and reuse content across their website. By leveraging custom post types and shortcodes, it provides a flexible solution for maintaining consistent and up-to-date content, while the ability to display random snippets adds an extra layer of dynamic content management.

---

## How to use Snippets

To use the "Snippets" plugin effectively, follow these detailed steps:

### Installation and Activation

1. **Download the Plugin**:
   - Ensure you have the `snippets.php` file with the plugin code.

2. **Upload the Plugin**:
   - Create a directory named `snippets` in your `wp-content/plugins` directory.
   - Place the `snippets.php` file inside the `snippets` directory.

3. **Activate the Plugin**:
   - Log in to your WordPress admin dashboard.
   - Navigate to `Plugins` > `Installed Plugins`.
   - Find the "Snippets" plugin in the list and click `Activate`.

### Creating Snippets

1. **Access Snippets**:
   - In the WordPress admin menu, you will see a new menu item called `Snippets`. Click on it.

2. **Add New Snippet**:
   - Click `Add New` to create a new snippet.
   - Enter a title and the content for your snippet.
   - Use the standard WordPress editor to format the snippet content.
   - Click `Publish` to save the snippet.

### Inserting Snippets into Posts or Pages

1. **Get the Snippet ID**:
   - Each snippet you create will have a unique ID. You can find the ID in the URL when editing a snippet or in the snippets list.

2. **Use the Shortcode**:
   - Edit the post or page where you want to insert the snippet.
   - Insert the shortcode `[snippet id="SNIPPET_ID"]` where you want the snippet to appear, replacing `SNIPPET_ID` with the actual ID of your snippet.

### Example Usage

1. **Single Snippet**:
   ```plaintext
   [snippet id="123"]
   ```

2. **Random Snippet from Multiple IDs**:
   ```plaintext
   [snippet ids="123, 456, 789"]
   ```

3. **Random Snippet from a Category**:
   ```plaintext
   [snippet category="announcements"]
   ```

In the third example, a random snippet from the category with the slug `announcements` will be selected and displayed.

### Benefits of Using the Plugin

- **Reusable Content**: Easily manage and reuse content across multiple posts and pages.
- **Consistency**: Maintain consistent information throughout your site by updating the snippet once and reflecting the changes everywhere it's used.
- **Efficiency**: Save time by creating snippets once and using them in multiple locations without duplicating effort.
- **Dynamic Content**: Display random snippets from a list of IDs or a category for more dynamic content presentation.

### Troubleshooting

- **Snippet Not Displaying**:
  - Ensure the snippet ID, IDs, or category slug is correct.
  - Check that the snippets are published and not in draft status.
  
- **Shortcode Appearing as Text**:
  - Make sure the plugin is activated.
  - Verify that the shortcode syntax is correct.

By following these steps, you can efficiently manage and insert reusable content blocks on your WordPress site using the "Snippets" plugin, including the ability to display random snippets from a list of IDs or a category.

---

## Disclaimer

This WordPress plugin is provided without warranty. As the program is licensed free of charge, there is no warranty for the program, to the extent permitted by applicable law. The entire risk as to the quality and performance of the program is with you. Should the program prove defective, you assume the cost of all necessary servicing, repair, or correction.

In no event unless required by applicable law or agreed to in writing will the authors or copyright holders be liable to you for damages, including any general, special, incidental, or consequential damages arising out of the use or inability to use the program (including but not limited to loss of data or data being rendered inaccurate or losses sustained by you or third parties or a failure of the program to operate with any other programs), even if such holder or other party has been advised of the possibility of such damages.
