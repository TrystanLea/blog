# blog

Personal blog. A small PHP site that renders Markdown posts, no build step or database.

## Writing a post

Add a file to `pages/en/`, the file name becomes the url (`pages/en/my-post.md` is served at `/my-post`). Start the file with front matter:

```
---
title: My post
published: 2024-11-13
description: Optional one line summary for search results and link previews
draft: true
---

Post content in Markdown...
```

- `title` and `published` are shown at the top of the post, posts are listed newest first.
- `description` is optional, the first paragraph is used if it's missing.
- `draft: true` hides the post from the Latest list, home page, feed and sitemap. It can still be viewed at its url.

Pages can also be `.html` or `.php` (for interactive pages, see `pages/en/model/`) with the same front matter at the top. Sub folders work too (`pages/en/model/varsupply.php` is `/model/varsupply`).

Images and files go in `images/` and `files/` and are referenced relative to the site root, e.g. `![chart](images/2023/heatpump2023.png)`.

## Menu and series

`menu.php` defines the side menu groups. Posts in a group get previous / next links and the groups are shown as series on the home page. The home page intro is `pages/en/home.md`.

## Other urls

- `/feed.xml` Atom feed of the latest 20 posts
- `/sitemap.xml` sitemap for search engines

## Structure

- `index.php` routing: finds the page, renders it and passes it to the theme
- `theme.php` page layout, `style.css` styles
- `lib/blog.php` front matter, page listing and rendering helpers
- `lib/home.php`, `lib/feed.php`, `lib/sitemap.php` templates
- `lib/Parsedown.php` Markdown parser

Requires Apache with mod_rewrite (see `.htaccess`) and PHP 7.4+.

To run locally without Apache use PHP's built in server with a small router script that sets `$_GET['q']` from the request path and includes `index.php`.
