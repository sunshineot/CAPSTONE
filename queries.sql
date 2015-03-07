SELECT * FROM `courses` WHERE c_code like 'COMP%' AND c_level=1;

/*Once someone is in the Computing department they will have to do the
	following course*/

SELECT DISTINCT c_code,c_name FROM `courses` JOIN degrees 
WHERE c_code like 'COMP%' AND c_level=1 AND department='COMPUTING';

