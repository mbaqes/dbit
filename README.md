# Dbit
## to share & show your stories like pages in Book
###### Start Coding with me ^_^



--------------------------------------------
 ## Entity
- User
- Book
- Story
- Comment(not impl)
- Rate(not impl)
 ------------------------------------------
 ## ORM
 this will updated when we add new models like **Comments,Rate,Like**
 ```mermaid
graph TD;
    User_1-->Book_1;
    User_1-->Book_2;
    User_1-->comments_1;
    User_2-->comments_1
    User_3-->comments_1
     User_3-->comments_2
    Book_1-->story_1;
    Book_1-->story_2;
    Book_2-->story_3;
    Book_2-->story_4;
    story_1-->comments_1;
    story_2-->comments_2;
   
```
-------------------------------------------
## Route api/
| **Route** | Description |
| --- | --- |
| `/login` | Log in the *User* to the system and give him unique key |
| `/register` | create new **User**  |
| `/addstory` | create new **Book** with arry of **story**  |
| `/mystories` | return all **User**  **stories**  |  
| `/stories` | return all **stories**  | 
| `/comment` | add   **comment** to **story**  | 

#### login body
```json
{
"email" : "moazali095@gmail.com",
"password" : "123456"
}
```

#### addstory body
 
```json
{  
"book":{
    "title" : "خطوات ",
    "body" : "لا يوجد",
    "stories":[ 
               {
               "title" : "الخطوة الاولة ",
               "body" : "تحديد الاسلاسيات"
               },
               {
               "title" : "الخطوة التانية",
               "body" : "العودة الي الخطوة الاولة " 
               }
]}}
```
#### add **Commet** body
 
```json
{
    "storyID" :4,
    "body" :"asdasdasdasd"
}
```
-------------------------------------------
## Next
| **Name** | Description |
| --- | --- |
| **User rate** | Rate Book with 5 stars |
| **pagination** | show books in pages with time created |
| **Books rate** | View the highest rated book  |
| **Books Likes** | View the highest liked book  |
| **comments** | View comments for each book  |
| **websocket** | websocket real time process  |
| **Rooms** | Rooms foe stories |

-------------------------------------------
## Start
- php artisan passport:install
- php artisan migrate
- php artisan serve
<div style="text-align:center">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://user-images.githubusercontent.com/25423296/163456776-7f95b81a-f1ed-45f7-b7ab-8fa810d529fa.png">
  <source media="(prefers-color-scheme: light)" srcset="https://user-images.githubusercontent.com/25423296/163456779-a8556205-d0a5-45e2-ac17-42d089e3c3f8.png">
  <img width="200" height="200"  alt="Shows an illustrated sun in light color mode and a moon with stars in dark color mode." src="https://user-images.githubusercontent.com/25423296/163456779-a8556205-d0a5-45e2-ac17-42d089e3c3f8.png">
</picture></div>
 
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://laravelnews.imgix.net/images/laravel-featured.png?ixlib=php-3.3.1">
  <source media="(prefers-color-scheme: light)" srcset="https://laravelnews.imgix.net/images/laravel-featured.png?ixlib=php-3.3.1">
  <img   alt="Shows an illustrated sun in light color mode and a moon with stars in dark color mode." src="https://laravelnews.imgix.net/images/laravel-featured.png?ixlib=php-3.3.1">
</picture>

