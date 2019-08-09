# DSCMS
DSCMS vol 0.5

simply CMS fur ur page! uh oh
replace with your home page

based on CodeIgniter 3.1.10
REMEMBER to change routes.php and config.php! for more info go to CodeIgniter manual page

DB scheme:

dscms_users
id (int; primary) | nick (varchar) | mail (varchar) | password (varchar(64)) | realname (varchar)

add first user to this table (f.e. by phpmyadmin); pswd hash sha256

dscms_news
id (int; primary) | title (varchar) | subtitle (varchar) | text (text) | date (date) | slug (varchar) | author (varchar) | show_author (tinyint(1)) | is_viewed (tinyint(1)) | show_date (tinyint(1))

TODO:
- auto-add admin on first use
- posts link may be text-based, not by pseudo-slug id
- e-mail system
- create a tags
- create a BB-code styled editor (now is only for view usage lol)
- settings for admin panel and posts
- manage users
and many many to do... 

Q&A ('cuz i always like to have this)

Q: it is free?!?!?!
A: yeah

Q: can i make own branch or sth?
A: yeah

Q: will u halp me? :C
A: sry with wut? it's simply as f... duck; however, if you clone this repo, i think you now what kind of MVS is CI; when you want to learn how CMS system works from this project, then xD 
really, maybe, MAYBE in 6 months it will be ok.
it is my big back to the dev after 3 years

Q: codeigniter suck!!!!1!11 one one eleven
A: i know, but nobody cares
