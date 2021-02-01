drop table if exists category;

create table category(
	cat_id int(3) not null auto_increment,
    cat_title varchar(255) not null,
    primary key (cat_id)
);