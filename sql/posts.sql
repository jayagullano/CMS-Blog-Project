drop table if exists posts;

create table posts(
	post_id int(3) not null auto_increment,
    post_category_id int not null,
    post_title varchar(255) not null,
    post_author varchar(255) not null,
    post_date date not null,
    post_image text,
    post_content text not null,
    post_tags varchar(255) not null,
    post_comment_count int not null,
    post_status varchar(255) not null default "draft",
    primary key (post_id),
    foreign key (post_category_id) references category(cat_id)
);

