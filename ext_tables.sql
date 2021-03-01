#
# Table structure for table 'tx_threesixtyslider_domain_model_slideritem'
#
CREATE TABLE tx_threesixtyslider_domain_model_slideritem (
	title varchar(255) DEFAULT '' NOT NULL,
	info1 text NOT NULL,
	info1_title varchar(255) DEFAULT '' NOT NULL,
	info2 text NOT NULL,
	info2_title varchar(255) DEFAULT '' NOT NULL,
	info3 text NOT NULL,
	info3_title varchar(255) DEFAULT '' NOT NULL,
	images text NOT NULL,
	path varchar(255) DEFAULT '' NOT NULL
);