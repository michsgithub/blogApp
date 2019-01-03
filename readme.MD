#Business purpose:

This app allows users to create their healthy lifestyle plans, i.e. food choices, activities, blogging, spiritual or anything.

#Features: 

1. Users come to the website, choose a category or create a new category to start the planning.

2. Users can also start planning by clicking the Start a Plan button to create a plan where users can fill subject line, enter descriptions and select a category.

3. Plans will be saved into database and displayed on the webpage

4. plans can be edited

5. plans can be deleted

#future considerations:

Users should sign up and log in to their account before planning.

#technocal aspects:

The app is created with MVC framework using PHP Laravel and MySql.

blade, the layout template, is used to allow layout be a constand and placed in wherever desired.



Two data models created are

    -> plans (id, subjects, descriptions, category_id)

    -> category (id, name)

#Dir Structure:

Model: app/Post.php

Model: app/Category.php

View: resources/views/categories-add.blade.php

View: resources/views/categories.blade.php

View: resources/views/home.blade.php

View: resources/views/plans-add.blade.php

View: resources/views/plans-edit.blade.php

View: resources/views/plans.blade.php

Controllers: app/Http/Controllers/planController.php

Controllers: app/Http/Controllers/CategoryController.php

route: routes/web.php

Migration -> creating database schema:

schema: database/migrations/2019_01_03_045334_plans.php

schema: database/migrations/2018_12_31_215718_category.php





