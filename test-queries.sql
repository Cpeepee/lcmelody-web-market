-- banner
INSERT INTO t_banners (`b_id`) VALUES ('0');

-- admins
INSERT INTO t_admin (`a_email`,`a_first_pass`,`a_second_pass`,`a_third_pass`) VALUES ('admin1','1','1','1');
INSERT INTO t_admin (`a_email`,`a_first_pass`,`a_second_pass`,`a_third_pass`) VALUES ('admin2','1','1','1');
INSERT INTO t_admin (`a_email`,`a_first_pass`,`a_second_pass`,`a_third_pass`) VALUES ('admin3','1','1','1');



-- customers
INSERT INTO t_customer (`c_FL_name`,`c_password`,`c_phonenumer`,`c_email`,`c_address`) VALUES ('محمد رضایی',
'1','09170654987','customer1@gmail.com','شیراز . بلوار کریمی . کوچه ۲۲ . پلاک ۱۱۱');

INSERT INTO t_customer (`c_FL_name`,`c_password`,`c_phonenumer`,`c_email`,`c_address`) VALUES ('علی باقری',
'1','09213654892','customer2@gmail.com','ایران . فارس . شیراز . پاساژ صدف . طبقه ۳ . واحد ۵ . پلاک ۹۹');



-- ticket
INSERT INTO t_ticket (`t_subject`,`t_email`,`t_main_text`) VALUES ('سوال در مورد نحوه ارسال محصول',
'1','با سلام و خسته نباشید . من تازه با سایت شما آشنا شدم خواستم بدونم نحوه ارسال و پشتیبانی و گارانتی چطوری انجام میشه ؟ باتشکر');

INSERT INTO t_ticket (`t_subject`,`t_email`,`t_main_text`) VALUES ('تخفیف نمیدید؟',
'1','سلام تخفیف بدید . خسیس بازی در نیارید');

INSERT INTO t_ticket (`t_subject`,`t_email`,`t_main_text`) VALUES ('زمان دریافت سفارش',
'2','سلام لطفا سفارش منو با پست فوری بفرستید هزینش با خودم مرسی');



-- admin message to tickets with delay insert this
INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`) VALUES ('1','1','با سلام . میتونید حضوری هم خرید کنید ',
'uniuni.test~');

INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`) VALUES ('2','2','با سلام . میتونید حضوری هم خرید کنید ');

-- customer message to tickets with delay insert this
INSERT INTO t_ticket_customer_message (`tm_t_id`,`tm_c_id`,`tm_message_text`) VALUES ('1','1','ممنون');

INSERT INTO t_ticket_customer_message (`tm_t_id`,`tm_c_id`,`tm_message_text`) VALUES ('2','2','تشکر فراوان ');



-- products
INSERT INTO t_product (`p_title`,`p_brand`,`p_model`,`p_description`,`p_summary_desc`,`p_amount`,`p_type`,`p_price`,`p_discount`,`p_creator_aid`) VALUES ('میکروفن یقه ای کاچک',
'کاچک',
'یقه ای',
'میکروفن SF-666 محصول شرکت یانمای یک میکروفن خازنی با الگوی الگوریتم قطبی می‌باشد. این میکروفن به راحتی به لپ‌تاپ و گوشی همراه قابل اتصال است (باید توجه داشت که برای اتصال به تلفن همراه باید از تبدیل جداکننده هدفون و میکروفن و یا کارت اکسترنال صدا استفاده کرد). با توجه به الگوریتم ضبط صدای قطبی ، این میکروفن برای ضبط صدا، پادکست، وکال و ... مناسب است. ابعاد مناسب و وزن کم این میکروفن از دیگر قابلیت‌های این محصول خوش‌دست به حساب می‌آید. این محصول به همراه یک پایه برای مشتریان ارایه شده است. ',
'نوع میکروفن :‌  کندانسر ترانزیستوری;نوع کاربری :‌  وکال , سخنرانی ;رابط :  جک 3.5 میلی متری صدا ;فرکانس پاسخ گویی :  50 تا 16000 هرتز ;حساسیت :  55- دسی بل ; فیلتر برش فرکانس‌های پایین : دارد;',
'20','استودیویی',
'100,000','20,000','1');


INSERT INTO t_product (`p_title`,`p_brand`,`p_model`,`p_description`,`p_summary_desc`,`p_amount`,`p_type`,`p_price`,`p_discount`,`p_creator_aid`) VALUES ('هدفن بچگانه ',
'کاچک',
'یقه ای',
'میکروفن SF-666 محصول شرکت یانمای یک میکروفن خازنی با الگوی الگوریتم قطبی می‌باشد. این میکروفن به راحتی به لپ‌تاپ و گوشی همراه قابل اتصال است (باید توجه داشت که برای اتصال به تلفن همراه باید از تبدیل جداکننده هدفون و میکروفن و یا کارت اکسترنال صدا استفاده کرد). با توجه به الگوریتم ضبط صدای قطبی ، این میکروفن برای ضبط صدا، پادکست، وکال و ... مناسب است. ابعاد مناسب و وزن کم این میکروفن از دیگر قابلیت‌های این محصول خوش‌دست به حساب می‌آید. این محصول به همراه یک پایه برای مشتریان ارایه شده است. ',
'نوع میکروفن :‌  کندانسر ترانزیستوری;نوع کاربری :‌  وکال , سخنرانی ;رابط :  جک 3.5 میلی متری صدا ;فرکانس پاسخ گویی :  50 تا 16000 هرتز ;حساسیت :  55- دسی بل ; فیلتر برش فرکانس‌های پایین : دارد;',
'20','استودیویی',
'10,000','5,000','2');



-- orders
INSERT INTO t_orders (`o_owner_cid`,`o_PTC`) VALUES ('1','12a34v8w56789');
INSERT INTO t_orders (`o_owner_cid`,`o_PTC`) VALUES ('1','155a34v8w56789');

INSERT INTO t_orders (`o_owner_cid`,`o_PTC`) VALUES ('2','12a34v8w5678009');
INSERT INTO t_orders (`o_owner_cid`,`o_PTC`) VALUES ('2','155a34v8w567809');



-- order items
INSERT INTO t_orders_items (`oi_o_id`,`oi_p_id`,`oi_amount`,`oi_price`,`oi_discount`) VALUES ('1','1','5','5,000','2500');
INSERT INTO t_orders_items (`oi_o_id`,`oi_p_id`,`oi_amount`,`oi_price`,`oi_discount`) VALUES ('1','2','5','50,000','0');


-- cart list
INSERT INTO t_cart_list (`cl_c_id`,`cl_p_id`,`cl_p_amount`) VALUES ('1','1','1');
INSERT INTO t_cart_list (`cl_c_id`,`cl_p_id`,`cl_p_amount`) VALUES ('1','2','6');


-- comments
INSERT INTO t_comment_verified (`cv_c_id`,`cv_p_id`,`cv_text`) VALUES ('1','1','امروز رسید به دستم فوق العاده است');
INSERT INTO t_comment_confirm (`cc_c_id`,`cc_p_id`,`cc_text`) VALUES ('2','1','بعد از چند ماه استفاده از این mic میتونم بگم که در کل برای استفاده نیمه حرفه ای مناسبه. البته برای کارکرد در بهترین حالت باید تنظیماتی رو در سیستمتون اعمال کنید.');
