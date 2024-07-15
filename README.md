# Snippets
Snippets is a versatile WordPress plugin designed to help you manage and insert reusable content blocks, called snippets, into your website. This plugin allows you to create a custom post type for snippets and easily insert them into posts and pages using shortcodes. Additionally, you can display a specific snippet or randomly select one from a list of snippet IDs for dynamic content display.

#### Key Features

1. **Custom Post Type for Snippets**:
   - Creates a custom post type called "snippets".
   - Allows you to create, edit, and manage snippets within the WordPress admin interface.
   - Supports titles, content, featured images, and revisions, similar to regular posts.

2. **Shortcode for Easy Insertion**:
   - Use the shortcode `[snippet id="SNIPPET_ID"]` to insert a specific snippet into a post or page.
   - Use the shortcode `[snippet ids="ID1,ID2,ID3"]` to randomly display one snippet from a list of IDs.

3. **User-Friendly Interface**:
   - Dedicated section in the WordPress admin menu for managing snippets.
   - Intuitive interface for creating and organizing snippets.

4. **Flexible Content Management**:
   - Use snippets for commonly used text blocks, code snippets, disclaimers, promotional content, etc.
   - Maintain consistency and save time by updating recurring content in one place.

5. **Taxonomy Support**:
   - Categorize and tag snippets using WordPress's built-in taxonomy features for better organization and searchability.

#### Installation and Usage

1. **Installation**:
   - Upload the `snippets` directory to the `wp-content/plugins` directory of your WordPress installation.
   - Activate the plugin from the Plugins page in the WordPress admin dashboard.

2. **Creating Snippets**:
   - Navigate to the "Snippets" section in the WordPress admin menu.
   - Click "Add New" to create a new snippet.
   - Enter the title and content for the snippet and publish it.

3. **Inserting Snippets**:
   - To insert a specific snippet into a post or page, use the shortcode `[snippet id="SNIPPET_ID"]`, replacing `SNIPPET_ID` with the actual ID of the snippet.
   - To randomly display one snippet from a list of IDs, use the shortcode `[snippet ids="ID1,ID2,ID3"]`, replacing `ID1, ID2, ID3` with the actual IDs of the snippets.

#### Examples

1. **Single Snippet**:
   ```plaintext
   [snippet id="123"]
   ```

2. **Random Snippet**:
   ```plaintext
   [snippet ids="123, 456, 789"]
   ```

In the second example, one of the snippets with IDs `123`, `456`, or `789` will be randomly selected and displayed.

#### License

The "Snippets" plugin is open-source software licensed under the GNU General Public License v3.0. This ensures that users have the freedom to use, modify, and distribute the plugin in accordance with the terms of the GPL v3.0.

#### Conclusion

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

   Example for a single snippet:
   ```plaintext
   [snippet id="123"]
   ```

3. **Random Snippet from Multiple IDs**:
   - To randomly display one snippet from a list of IDs, use the shortcode `[snippet ids="ID1,ID2,ID3"]`, replacing `ID1, ID2, ID3` with the actual IDs of the snippets you want to randomly display.

   Example for random snippet selection:
   ```plaintext
   [snippet ids="123, 456, 789"]
   ```

4. **Publish or Update the Post/Page**:
   - Once you have inserted the shortcode, save the changes by clicking `Publish` or `Update`.

### Example Usage

#### Single Snippet

If you have a snippet with the ID `123` that contains a frequently used disclaimer, you can insert it into any post or page using the shortcode:

```plaintext
[snippet id="123"]
```

#### Random Snippet

To display a random snippet from the list of IDs `123`, `456`, and `789`, use the shortcode:

```plaintext
[snippet ids="123, 456, 789"]
```

In this example, one of the snippets with IDs `123`, `456`, or `789` will be randomly selected and displayed at the location of the shortcode.

### Benefits of Using the Plugin

- **Reusable Content**: Easily manage and reuse content across multiple posts and pages.
- **Consistency**: Maintain consistent information throughout your site by updating the snippet once and reflecting the changes everywhere it's used.
- **Efficiency**: Save time by creating snippets once and using them in multiple locations without duplicating effort.
- **Dynamic Content**: Display random snippets from a list of IDs for more dynamic content presentation.

### Troubleshooting

- **Snippet Not Displaying**:
  - Ensure the snippet ID is correct.
  - Check that the snippet is published and not in draft status.
  
- **Shortcode Appearing as Text**:
  - Make sure the plugin is activated.
  - Verify that the shortcode syntax is correct.

By following these steps, you can efficiently manage and insert reusable content blocks on your WordPress site using the "Snippets" plugin, including the ability to display random snippets from a list of IDs.

---

## Disclaimer

This WordPress plugin is provided without warranty. As the program is licensed free of charge, there is no warranty for the program, to the extent permitted by applicable law. The entire risk as to the quality and performance of the program is with you. Should the program prove defective, you assume the cost of all necessary servicing, repair, or correction.

In no event unless required by applicable law or agreed to in writing will the authors or copyright holders be liable to you for damages, including any general, special, incidental, or consequential damages arising out of the use or inability to use the program (including but not limited to loss of data or data being rendered inaccurate or losses sustained by you or third parties or a failure of the program to operate with any other programs), even if such holder or other party has been advised of the possibility of such damages.
