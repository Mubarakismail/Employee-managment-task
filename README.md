## About Project

This project aim to solve tasks of employment process of company to measure my thinking skills and about my knowledge by
a technologies that used on it

### Main goals

- Create employee info
- Delete employee form system
- Update employee info
- Generate report to sort data by department in ascending order and salary in descending
- Search for any employee by any column shown in datatables

### Solution

- i used yajra datatables to view or generate a report by needed requirements so the default query of opening datatable
  is to show data in needed orders
- i used boostrap modals to update or creating employees
- show message in sweet alert after creating or updating or deleting employee
- i used the same table of users to save data of employees so i increased the table with required data
- i used [laravel Jetstream](https://jetstream.laravel.com/3.x/introduction.html) to authenticate users
- i wrote employee seeder to generate some fake data so U can use laravel command `php artisan mi:f --seed`

### How it works

- Clone project `git clone https://github.com/Mubarakismail/Employee-managment-task.git`
- run command **`cp .env.example .env`**
- run `php artisan key:generate` command
- run `composer install` command
- run `npm install`
- run `php artisan mi:f --seed` to migrate and add some fake data

### Don't forget to run `npm run dev` while application running
