# Order Processing module
Here i give importance to the order processing features work.

Technology: Bootstrap, Javascript Laravel, MYSQL
Version: PHP 7.2 (You must set this version for test)

## Installation or setup
1. You must set this version for test
2. Set db name, db user, db password to .env
3. php artisan migrate --seed
4. php artisan serve



## Follow the steps for Order process checking:
User for test:-
Super Admin
Email: admin@admin.com
Password: password


Business Analyst 
Email: analyst@analyst.com
Password: password


Chief financial officer
Email: cfo@cfo.com
Password: password



Steps:
1. Login as Super Admin -> Create order applicaton -> Send to Analyst
2. Login as Business Analyst -> Order application -> Submit Analysis with comment
3. Login as Super Admin -> Order application -> Send to CFO
4. Login as Chief financial officer -> Order application -> Submit Analysis with comment
5. Login as Super Admin -> Order applicaton -> View or  Edit -> Status Approved 

After this process Order process completed.
