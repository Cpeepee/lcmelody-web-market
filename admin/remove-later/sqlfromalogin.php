



//function validation protect sql injection and validate data
function insql($p1,$p2,$p3,$p4)
{

  $Generic_SQL_Injection_Payloads = array
        (
          "'",
          "\'",
          "''",
          '`',
          "``",
          ",",
          '"',
          '\"',
          '""',
          "/",
          "//",
          "\",
          "\\",
          ";",
          "or",
          "OR",
          "Or",
          "oR",
          " OR",
          " or",
          " oR",
          " Or",
          "AND",
          "And",
          "aND",
          "aNd",
          "and",
          "anD",
          "AnD",
          "WHERE",
          "Where",
          "wHERE",
          "whERE",
          "  ",
          "||",
          " ||",
          " | |",
          "' or "",
          "-- or #",
          "' OR '1",
          "' OR 1 -- -",
          "" OR "" = "",
          "" OR 1 = 1 -- -",
          "' OR '' = '",
          "'='",
          "'LIKE'",
          "'=0--+",
          "OR 1=1",
          "' OR 'x'='x",
          "' AND id IS NULL; --",
          "'''''''''''''UNION SELECT '2",
          "%00",
          "/*…*/",
          "# Numeric",
          "AND 1",
          "AND 0",
          "AND true",
          "AND false",
          "1-false",
          "1-true",
          "1*56",
          "-2",
          "1' ORDER BY 1--+",
          "1' ORDER BY 2--+",
          "1' ORDER BY 3--+",
          "1' ORDER BY 1,2--+",
          "1' ORDER BY 1,2,3--+",
          "1' GROUP BY 1,2,--+",
          "1' GROUP BY 1,2,3--+",
          "' GROUP BY columnnames having 1=1 --",
          "-1' UNION SELECT 1,2,3--+",
          "' UNION SELECT sum(columnname ) from tablename --",
          "-1 UNION SELECT 1 INTO @,@",
          "-1 UNION SELECT 1 INTO @,@,@",
          "1 AND (SELECT * FROM Users) = 1",
          "' AND MID(VERSION(),1,1) = '5';"
        );
  foreach ($Generic_SQL_Injection_Payloads as $value)
  {
    $p1 = str_replace($value,"",$p1);
    $p2 = str_replace($value,"",$p2);
    $p3 = str_replace($value,"",$p3);
    $p4 = str_replace($value,"",$p4);
  }
  $output = array($p1,$p2,$p3,$p4);
  return $output;
}
