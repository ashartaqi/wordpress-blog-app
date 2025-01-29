
# Installation

## Step 1: Download the Theme
- Download the theme files from the GitHub repository or as a `.zip` file.
- Extract the `.zip` file if necessary.

## Step 2: Upload the Theme to WordPress
1. Log in to your WordPress admin dashboard.
2. Navigate to **Appearance > Themes**.
3. Click on **Add New** and then **Upload Theme**.
4. Choose the `.zip` file of the theme and click **Install Now**.
5. Once installed, click **Activate** to enable the theme on your site.

## Step 3: Configure the Theme
After activating the theme, you may need to configure some settings to make it work perfectly for your site. Below are some areas you might want to customize.

### Theme Configuration

#### Pages
To get started, create at least two pages:

- **Home Page:** This will serve as your static front page.
- **Posts Page:** This will display your blog posts.

To set these pages:

1. Go to **Pages > Add New**.
2. Create a new page titled `"Home"` (or any name you prefer) and assign the template `front-page.php` (or the name of your home template file).
3. Create another page titled `"Blog"` (or any name you prefer) to serve as your posts page.
4. Save both pages.

#### Posts
Add as many posts as you'd like to populate your blog. You can access these posts:

- From the **Posts Page** you set up earlier.
- Using the **Search Bar** on the 404 page or in the footer.

To create posts:

1. Go to **Posts > Add New**.
2. Add a **title**, **content**, and **featured image** (if applicable).
3. Click **Publish**.

#### Reading Settings
To configure your site's front page and posts page:

1. Go to **Settings > Reading**.
2. Under **Your homepage displays**, select **A static page**.
3. Set the **Homepage** to the `"Home"` page you created earlier.
4. Set the **Posts page** to the `"Blog"` page you created earlier.
5. Click **Save Changes**.

#### Menus
Menus will not be created automatically, so you’ll need to set them up manually:

1. Go to **Appearance > Menus**.
2. Create a new menu and add your pages (e.g., **Home, Blog**).
3. Assign the menu to the appropriate location (e.g., **Primary Menu, Footer Menu**).
4. Click **Save Menu**.

### Widgets
You can add widgets to your sidebar and footer to enhance functionality. Below are some examples:

#### Sidebar Widget
Add the following code to your sidebar widget area to display social icons:

```html
<ul class="social-list list-inline py-3 mx-auto">
    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
</ul>

and for footer area:

```
<p class="copyright"><a href="https://github.com/ashartaqi">ashartaqi</a></p>


