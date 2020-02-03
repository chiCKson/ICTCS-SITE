create table news(
    id int primary key ,
    imgurl text,
    content text,
    title varchar(50),
    date timestamp,
    author varchar(20),
    keywords varchar(50)
);

create table members(
    id int primary key,
    name VARCHAR(30),
    title varchar(30),
    descript text,
    img varchar(50),
    fb VARCHAR(50),
    twitter VARCHAR(50),
    linkedin VARCHAR(100),
    github VARCHAR(50),
    email varchar(100)
);
create table pastmembers(
    id int primary key,
    name VARCHAR(30),
    title varchar(30),
    descript text,
    img varchar(50),
    fb VARCHAR(50),
    twitter VARCHAR(50),
    linkedin VARCHAR(100),
    github VARCHAR(50),
    email varchar(100)
);
create table admin(
    id int primary key auto_increment,
    username varchar(50),
    password varchar(50)
)

insert into members values(1,'Erandra Jayasundara','President','Erandra Jayasundara is an undergraduate of fourth year and following the degree of BSc(Hons) in ICT. He enrolled to Vavuniya Campus in 2016 and shown remarkable advance in academic. He lead the teams which won 1st place in Hackintra 2017 and 2016',
'p1.jpg','https://www.facebook.com/erandraj','https://twitter.com/era_ndra','https://www.linkedin.com/in/erandraj','https://github.com/chiCKson','2014erandra@vau.jfn.ac.lk');
insert into members values(6,'Thilina Gunarathne','Executive Committee Member','Thilina Gunarathne is an undergraduate of fourth year and following the degree of BSc in ICT.',
'members/thilina.jpg','https://www.facebook.com/thilina.gunarathne.1','','https://www.linkedin.com/in/thilina-gunarathne-3886b9117','','thilina@ictcs.lk');

insert into members values(10,'Himaathri Premakumar ','Student Coordinator','Himaathri Premakumar is a second year ict student of vavuniya campus University of Jaffna. She joined the campus in 2018.',
'members/hima.jpg','https://www.facebook.com/profile.php?id=100010216867957','','https://www.linkedin.com/in/himaathri-premakumar-a81880192','https://github.com/Himaathri','thilina@ictcs.lk');

insert into members values(3,'Subodhi Wasalthilake','Secretary','Subodhi Wasalthilake is an undergraduate of fourth year and following the degree of BSc in ICT.',
'p3.jpg','https://www.facebook.com/kalpani.wasalthilake','https://twitter.com/SubodhiKW','https://www.linkedin.com/in/subodhi-wasalthilake-7b0a315b','https://github.com/','subodhi@ictcs.lk');

insert into pastmembers values(1,'Madusanka Premaratne','President(2013)','Madusanka Premaratne is currently COO of Insfra Technologies and he is one of Co-Founder of same Company. He enrolled in Vavuniya Campus in 2009 and passed out with a first class in 2014. ',
'pastmembers/madu.jpg','https://www.facebook.com/madusankapremaratne','https://twitter.com/maduspremaratne','https://lk.linkedin.com/in/madusanka','https://github.com/','subodhi@ictcs.lk');

insert into pastmembers values(4,'Chathuranga Bandara','President(2016)','Chathuranga Bandara is currently working as Software Engineer at Microimage HCM. He enrolled in Vavuniya Campus in 2013 and passed out 2016. ',
'pastmembers/chathu.jpg','https://www.facebook.com/bandara.chathu','https://twitter.com/','https://lk.linkedin.com/in/bandarad','https://github.com/','subodhi@ictcs.lk');

insert into pastmembers values(4,'Praboda Perera','President(2018)','Praboda Perera is currently working as Demonstrator at Vavuniya Campus. He enrolled in Vavuniya Campus in 2015 and passed out 2018. ',
'pastmembers/prabodha.jpg','https://www.facebook.com/PrabodaMP','https://twitter.com/prabodamp7','https://lk.linkedin.com/in/prabodamp','https://github.com/','subodhi@ictcs.lk');