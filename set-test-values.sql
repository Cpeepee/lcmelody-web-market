DROP TABLE t_admin;
DROP TABLE t_banners;
DROP TABLE t_cart_list;
DROP TABLE t_comment_verified;
DROP TABLE t_comment_confirm;
DROP TABLE t_customer;
DROP TABLE t_orders_items;
DROP TABLE t_orders;
DROP TABLE t_product;
DROP TABLE t_ticket_customer_message;
DROP TABLE t_ticket_admin_message;
DROP TABLE t_ticket;









--------------------------------- admins pass= space
INSERT INTO t_admin (`a_id`,`a_email`,`a_attempts_TL`,`a_first_pass`,`a_second_pass`,`a_third_pass`)
  VALUES ('1',' ','7215ee9c7d9dc229d2921a40e899ec5f','7215ee9c7d9dc229d2921a40e899ec5f','7215ee9c7d9dc229d2921a40e899ec5f');


  INSERT INTO t_admin (`a_id`,`a_email`,`a_attempts_TL`,`a_first_pass`,`a_second_pass`,`a_third_pass`)
    VALUES ('2',' ','7215ee9c7d9dc229d2921a40e899ec5f','7215ee9c7d9dc229d2921a40e899ec5f','7215ee9c7d9dc229d2921a40e899ec5f');
-------------------------------------------- customer
INSERT INTO t_customer (`c_id`,`c_FL_name`,`c_password`,`c_email`,`c_attempts_TL`,`c_address`)
  VALUES ('1','اکبر اکبری اکبر زاده'
    ,'123','fakeeimail','0','somewhere');


    INSERT INTO t_customer (`c_id`,`c_FL_name`,`c_password`,`c_email`,`c_attempts_TL`,`c_address`)
      VALUES ('2','محمد محمدی محمدی زاده'
        ,'123','fakeeimail','0','somewhere');


-------------------------- ticket
INSERT INTO (`t_id`,`t_subject`,`t_email`,`t_main_text`)
  VALUES ('1','سلام مشکل دارم زیاد سلام مشکل دارم زیاد'
    ,'email','سلام مشکل دارم زیاد سلام مشکل دارم زیاد سلام مشکل دارم زیاد سلام مشکل دارم زیاد سلام مشکل دارم زیاد سلام مشکل دارم زیاد ');


    INSERT INTO (`t_id`,`t_subject`,`t_email`,`t_main_text`)
      VALUES ('2','سلام مشکل دارم زیاد سلام مشکل دارم زیاد'
        ,'email','سلام مشکل دارم زیاد سلام مشکل دارم زیاد سلام مشکل دارم زیاد سلام مشکل دارم زیاد سلام مشکل دارم زیاد سلام مشکل دارم زیاد ');



----------------------------------- product
INSERT INTO t_product (p_title,p_type,p_discount,p_amount,p_priority_TS,p_status,p_brand,p_model,p_price,p_summary_desc,p_description,p_creator_aid)
  VALUES ('هندزفری مدل بی کو کجا',
    'هندزفری',
    '10,000','10','1','1','GOGO','AK','20,000','نکته فنی نداره میخواد چیکار',
    'این محصول خیلی مزخرفه  این محصول خیلی مزخرفه این محصول خیلی مزخرفه این محصول خیلی مزخرفه ',
    '1');

    INSERT INTO t_product (p_title,p_type,p_discount,p_amount,p_priority_TS,p_status,p_brand,p_model,p_price,p_summary_desc,p_description,p_creator_aid)
      VALUES ('هدفن کله آشپزی برای گیمر های منگل',
        'هدفن',
        '50,000','6','1','1','PEPE','MOMO','60,000','نکته فنی نداره میخواد چیکار',
        'این محصول خیلی مزخرفه  این محصول خیلی مزخرفه این محصول خیلی مزخرفه این محصول خیلی مزخرفه ',
        '2');


------------------------------------ orders

























--
