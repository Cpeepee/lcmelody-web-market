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







INSERT INTO t_admin (`a_id`,`a_email`,`a_attempts_TL`,`a_first_pass`,`a_second_pass`,`a_third_pass`)
  VALUES ('1','ad','0','1','1','1');


  INSERT INTO t_admin (`a_id`,`a_email`,`a_attempts_TL`,`a_first_pass`,`a_second_pass`,`a_third_pass`)
    VALUES ('2','ad','0','1','1','1');


INSERT INTO t_customer (`c_id`,`c_FL_name`,`c_password`,`c_email`,`c_attempts_TL`,`c_address`,`c_phonenumer`)
  VALUES ('1','ali akbari'
    ,'123','fakeeimail','0','somewhere','0');


    INSERT INTO t_customer (`c_id`,`c_FL_name`,`c_password`,`c_email`,`c_attempts_TL`,`c_address`,`c_phonenumer`)
      VALUES ('2','mohammad shokri'
        ,'123','fakeeimail','0','somewhere','0');


INSERT INTO t_ticket(`t_subject`,`t_email`,`t_main_text`)
  VALUES ('i have problem'
    ,'2','some thing like text');


    INSERT INTO t_ticket (`t_subject`,`t_email`,`t_main_text`)
      VALUES ('problem problem'
        ,'email','ok this is text?');



INSERT INTO t_product (p_title,p_type,p_discount,p_amount,p_priority_TS,p_status,p_brand,p_model,p_price,p_summary_desc,p_description,p_creator_aid)
  VALUES ('headephone akak pow kao',
    'handsfree',
    '10,000','10','1','1','GOGO','AK','20,000','nothing techinical',
    'this is desc',
    '1');

    INSERT INTO t_product (p_title,p_type,p_discount,p_amount,p_priority_TS,p_status,p_brand,p_model,p_price,p_summary_desc,p_description,p_creator_aid)
      VALUES ('bull shit ok?',
        'head',
        '50,000','6','1','1','PEPE','MOMO','60,000','techinic',
        'this is desc',
        '2');


INSERT INTO t_orders(`o_owner_cid`)
  VALUES ('1');


  INSERT INTO t_orders(`o_owner_cid`)
    VALUES ('2');

INSERT INTO t_banners (`b_id`) VALUES ('0');


INSERT INTO t_cart_list (`cl_c_id`,`cl_p_id`,`cl_p_amount`)
  VALUES ('1','1','10');

  INSERT INTO t_cart_list (`cl_c_id`,`cl_p_id`,`cl_p_amount`)
    VALUES ('1','2','10');

    INSERT INTO t_cart_list (`cl_c_id`,`cl_p_id`,`cl_p_amount`)
      VALUES ('2','1','10');

      INSERT INTO t_cart_list (`cl_c_id`,`cl_p_id`,`cl_p_amount`)
        VALUES ('2','2','10');

INSERT INTO t_comment_confirm (`cc_c_id`,`cc_p_id`,`cc_text`)
  VALUES ('1','1','its ok that is product 2');


  INSERT INTO t_comment_confirm (`cc_c_id`,`cc_p_id`,`cc_text`)
    VALUES ('2','2','its ok that is product 1');




    INSERT INTO t_comment_verified (`cv_c_id`,`cv_p_id`,`cv_text`)
      VALUES ('1','2','its ok that is product 2');


      INSERT INTO t_comment_verified (`cv_c_id`,`cv_p_id`,`cv_text`)
        VALUES ('2','1','its ok that is product 1');

INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`)
  VALUES ('1','1','this is from admin message ok?','test.sql~');


  INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`)
    VALUES ('1','1','this is second message from admin message ok?','test.sql~');



      INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`)
        VALUES ('2','1','this is second message from admin message ok?','test.sql~');


          INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`)
            VALUES ('2','1','this is second message from admin message ok?','test.sql~');


INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`)
  VALUES ('1','2','this is from admin message ok?','test.sql~');


  INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`)
    VALUES ('1','2','this is second message from admin message ok?','test.sql~');



      INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`)
        VALUES ('2','2','this is second message from admin message ok?','test.sql~');


          INSERT INTO t_ticket_admin_message (`tm_t_id`,`tm_a_id`,`tm_message_text`,`tm_appendixes`)
              VALUES ('2','2','this is second message from admin message ok?','test.sql~');


      INSERT INTO t_ticket_customer_message (`tm_t_id`,`tm_c_id`,`tm_message_text`,`tm_appendixes`)
        VALUES ('1','1','this is second messagregr g eg regr erge from admin message ok?','test.sql~');


          INSERT INTO t_ticket_customer_message (`tm_t_id`,`tm_c_id`,`tm_message_text`,`tm_appendixes`)
            VALUES ('1','1','this is second mgregrgeegrgeegr essage from admin message ok?','test.sql~');


      INSERT INTO t_ticket_customer_message (`tm_t_id`,`tm_c_id`,`tm_message_text`,`tm_appendixes`)
        VALUES ('2','2','this is second mesgrwetrwe 6tsage from admin message ok?','test.sql~');


          INSERT INTO t_ticket_customer_message (`tm_t_id`,`tm_c_id`,`tm_message_text`,`tm_appendixes`)
            VALUES ('2','2','this is secondywt rtwy ywrrtwy  message from admin message ok?','test.sql~');
