--a
select * from baiviet, theloai where baiviet.ma_tloai=theloai.ma_tloai and theloai.ten_tloai="Nhạc trữ tình";

--b
select * from baiviet, tacgia where baiviet.ma_tgia=tacgia.ma_tgia and tacgia.ten_tgia="Nhacvietplus";

--c
select ten_tloai from theloai where ma_tloai not in (select ma_tloai from baiviet group by ma_tloai);

--d
select ma_bviet, tieude, ten_bhat, ten_tgia, ten_tloai, ngayviet from baiviet, tacgia, theloai where baiviet.ma_tgia=tacgia.ma_tgia and baiviet.ma_tloai=theloai.ma_tloai;

--e
select ten_tloai from theloai, baiviet where baiviet.ma_tloai=theloai.ma_tloai group by baiviet.ma_tloai limit 1;

--f
select ten_tgia from tacgia, baiviet where baiviet.ma_tgia=tacgia.ma_tgia group by baiviet.ma_tgia limit 2;

--g
select ma_bviet from baiviet where ten_bhat like "%anh%" or ten_bhat like "%em%" or ten_bhat like "%thương%" or ten_bhat like "%yêu%";

--h
select ma_bviet from baiviet where ten_bhat like "%anh%" or ten_bhat like "%em%" or ten_bhat like "%thương%" or ten_bhat like "%yêu%" or tieude like "%anh%" or tieude like "%em%" or tieude like "%thương%" or tieude like "%yêu%";

--i
create view vw_music as select ma_bviet, ten_tloai, ten_tgia from baiviet, tacgia, theloai where baiviet.ma_tloai=theloai.ma_tloai and baiviet.ma_tgia=tacgia.ma_tgia; 

--j
create procedure sp_dsbaiviet(in name varchar(50)) begin  if((select count(*)  from theloai where ten_tloai=name)>0) then       select ma_bviet from baiviet,theloai where baiviet.ma_tloai=theloai.ma_tloai and ten_tloai=name; else   select "error"; end if; end;

--k

--l
create table users( id int not null, user varchar(20) not null, password varchar(16), primary key(id,user));
