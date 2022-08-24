# Dbit
## to share & show your stories like pages in Book
###### Start Coding with me ^_^
--------------------------------------------
 ## Entitys
- User
- Book
- storie
 ------------------------------------------
 ## ORM
 ```mermaid
graph TD;
    User-->Book1;
    User-->Book2;
    Book1-->storie1;
    Book1-->storie2;
    Book2-->storie3;
    Book2-->storie4;
```
-------------------------------------------
## Route api/
| Route | Description |
| --- | --- |
| `/login` | Log in the *User* to the system and give him unique key |
| `/register` | create new **User**  |
| `/addstory` | create new **Book** with arry of **storie**  |
| `/mystories` | return all **User**  **storie**  |  
| `/stories` | return all **stories**  | 

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
-------------------------------------------
## Next
| Name | Description |
| --- | --- |
| User rate | Rare Book with 5 stars |
| pagination | show books in pages with time created |
| Books rate | View the highest rated book  |
| Books Liks | View the highest liked book  |
| comments | View comments for each book  |
| websocket | websocket real time process  |
| Rooms | Rooms foe stories |

-------------------------------------------
## Start
- php artisan passport:install
- php artisan migrate
- php artisan serve

<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://user-images.githubusercontent.com/25423296/163456776-7f95b81a-f1ed-45f7-b7ab-8fa810d529fa.png">
  <source media="(prefers-color-scheme: light)" srcset="https://user-images.githubusercontent.com/25423296/163456779-a8556205-d0a5-45e2-ac17-42d089e3c3f8.png">
  <img alt="Shows an illustrated sun in light color mode and a moon with stars in dark color mode." src="https://user-images.githubusercontent.com/25423296/163456779-a8556205-d0a5-45e2-ac17-42d089e3c3f8.png">
</picture>
-------------------------------------------


