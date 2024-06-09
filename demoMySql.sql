create Table if not exists `tbl_user`
(
	`user_id` int(10) not null,
    `user_name` varchar(64) not null,
    `password` varchar (32) default null,
    `email` varchar (100) default null,
    `fullname` varchar (32) default null,
    `avata` varchar (128) default null,
    `status` tinyint (1) default '1'
) ENGINE = InnoDB AUTO_INCREMENT=1 default charset=utf8;

create table if not exists `tbl_province`
(
	`pro_id` int(10) not null,
    `pro_name` varchar(64) not null,
    `status` tinyint(1) default '1'
)ENGINE = InnoDB AUTO_INCREMENT=1 default charset=utf8;

#sửa bảng tbl_user thêm khóa chính cho trường user_id
alter table tbl_user
	add primary key (user_id);
    
#sửa bảng tbl_user thêm thuộc tính auto_increment
alter table tbl_user
	modify user_id int(10) not null auto_increment;
    
#Sửa bảng tbl_province thêm khóa chính cho bảng
alter table tbl_province
	add primary key (pro_id);

#Sửa bảng tbl_province thêm thuộc tính auto_increment
alter table tbl_province
	modify pro_id int(10) not null auto_increment;
    
Insert into tbl_province (pro_name, `status`) values ('Hà Nội',1);
insert into tbl_province (pro_name, `status`)values ('Hải Phòng', 1);
insert into tbl_province (pro_name, `status`)values ('Tuyên Quang', 1);
insert into tbl_province (pro_name, `status`)values ('Phú Thọ', 1);
insert into tbl_province (pro_name, `status`)values ('Bắc Ninh', 1);
insert into tbl_province (pro_name, `status`)values ('Hải Dương', 1);
insert into tbl_province (pro_name, `status`)values ('Hưng Yên', 1);
insert into tbl_province (pro_name, `status`)values ('Hà Nam', 1);
insert into tbl_province (pro_name, `status`)values ('Ninh Bình', 1);
insert into tbl_province (pro_name, `status`)values ('Thanh Hóa', 1);
insert into tbl_province (pro_name, `status`)values ('Nghệ An', 1);
Select * from tbl_province;

INSERT INTO tbl_user (user_name, `password`, email, fullname, user_id, avata, `status`)
	VALUES ("admin", "123456", "admin@mail.com", "Nguyễn Quang Anh", "1", "NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname,user_id, avata, `status`)
	VALUES ("cuongnd", "123456","cuongnd@mail.com", "Nguyễn Đình Cường", "2", "NULL","2");
INSERT INTO tbl_user (user_name, `password`, email, fullname, user_id, avata, `status`)
	VALUES ("vietpv", "123456", "vietpv@mail.com", "Phạm Văn Việt", "3", "NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname,user_id,avata, `status`)
	VALUES ("tunq", "123456", "tunq@mail.com", "Nguyễn Quang Tú", "1", "NULL","1"); 
INSERT INTO tbl_user (user_name, `password`, email, fullname,user_id, avata, `status`)
	VALUES ("vinhpt", "123456", "admin@mail.com", "Phan Thanh Minh", "3", "NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname,user_id, avata, `status`) 
	VALUES ("hoangvv", "123456", "hoangvv@mail.com", "Vũ Văn Hoàng", "5","NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname, user_id, avata, `status`)
	VALUES ("ducdd", "123456", "ducdd@mail.com", "Đỗ Đăng Đức", "5", "NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname, user_id, avata, `status`)
	VALUES ("hoangkt", "123456", "hoangkt@mail.com", "Khuất Thành Hoàng", "7", "NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname, user_id, avata, `status`)
	VALUES ("cuongvx", "123456","cuongvx@mail.com", "Vũ Xuân Cường", "6","NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname, user_id, avata, `status`)
	VALUES ("tuannq", "123456", "tuanng@mail.com", "Nguyễn Quang Tuấn", "3", "NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname,user_id, avata, `status`)
	VALUES ("tungnm", "123456", "tungnm@mail.com", "Nguyễn Minh Tùng","1","NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname,user_id, avata, `status`)
	VALUES ("haivq", "123456","haivq@mail.com", "Vũ Quang Hải","3", "NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname,user_id,avata, `status`)
	VALUES ("hungtx", "123456", "hungtx@mail.com" , "Trần Xuân Hùng", "4","NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname,user_id, avata, `status`)
	VALUES ("haicx", "123456", "haicx@mail.com", "Chu Xuân Hải","2","NULL","1");
INSERT INTO tbl_user (user_name, `password`, email, fullname, user_id, avata, `status`)
	VALUES ("khuongng", "123456", "khuongnq@mail.com", "Nguyễn Quang Khương","1", "NULL","1");
select * From tbl_user;








