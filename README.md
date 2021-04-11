# php-wp-theme

## Task

1. Create child theme PHP and activate it.
2. Add 2 Categories News, COVID and 5 tags: hot, Ukraine, Europe, IT, Lviv
3. Register custom taxonomy: Topic
4. Create two Topics: Important and Trash
5. Generate 100 pots with images and randomly assign them to the existing categories, tags and topics
6. Add dropdown custom field Region with some options (e.g. Lviv, Kyiv, Poltava, Uzhgorod etc) for posts with tag Ukraine
7. Register page template called with your name with the next structure:
  - Title: "We Are Rocking This World"
  - Section Popular News: 4 latest posts with tag #hot from category News
  - Section Important with 4 latest posts from the appropriate taxonomy
  - Section Ukraine with 8 latest posts (in 2 rows) tagged #Ukraine (additionaly show Region value under the title). 
  
  * All cards(featured image + post title) should be linked to appropriate page.

8. Create in the admin panel Frontpage and set your template to it
9. Change your homepage to static Frontpage

---

The TwentyNineteen theme was selected as a parent theme.

For generating posts I've used the FakerPress plugin and the ACF – for a dropdown custom field.

The project has been deployed on a hosting. 

[Demo](http://php-hw-6.tmweb.ru/)
