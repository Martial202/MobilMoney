create database MobilMoney;
	use MobilMoney;
	create table user (
       id_user int(11) not null auto_increment,
       nom_user varchar(100) not null,
       pren_user varchar(100) not null,
       pseu_user varchar(100) not null,
       mdp_user varchar(100) not null,
       stat_user varchar(100) not null,
       primary key(id_user)
		);
	create table transaction (
       id_tra int(11) not null auto_increment,
       ref_tra varchar(100) not null,
       num_tra varchar(100) not null,
       mont_tra varchar(100) not null,
       op_tra varchar(100) not null,
       reso_tra varchar(100) not null,
       dat_tra varchar(100) not null,
       heu_tra varchar(100) not null,
       id_user int(11) not null,
       primary key(id_tra),
       foreign key(id_user) references user(id_user)
		);
	create table recette (
       id_recet int(11) not null auto_increment,
       dep_recet varchar(100) not null,
       ret_recet varchar(100) not null,
       dat_recet varchar(100) not null,
       heu_recet varchar(100) not null,
       id_user int(11) not null,
       primary key(id_recet),
       foreign key(id_user) references user(id_user)
		);