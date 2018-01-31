# Set Active State Nav

**Sets** the **active state** for the **nav** bar menu item

## How it works

Step 1 - use PHP to get the URL

We use PHP instead of wordpress syntax because the top level menu
items need to be identified in the URL.

```
    //GET THE URL
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);

```

Step 2 - Add the active state

Not to be confused with the psuedo 'active' 
The active state means whatever you want. Instead this plugin adds
to the nav bar a tag item.

If the id of your main menu is different please search for #menu-main-menu
in this plugin and edit to your needs!

```
  $('#menu-main-menu a:icontains("<?php echo $url ?>")').addClass("the_active_state_nav_item");
```

Step 3 - Add you own styles!

Now you can add styles to this 'active' menu item however you like!




