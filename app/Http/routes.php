<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'WelcomeController@index');

//Routes using the MemberController
/**
 * The URI will only be members/{individuals_id} or members/{email}
 * Doing members/id/{individual} and members/email/{email} for Steve to have two options.
 */
$app->get('members/id/{individuals_id}', 'MemberController@showMemberById');
$app->get('members/email/{email}', 'MemberController@showMemberByEmail');



//Routes for Departments
$app->get('departments', 'DepartmentController@showAllDepartments');
$app->get('departments/{dept_id}', 'DepartmentController@showSpecificDepartment');
// $app->get('departments/{dept_id}/members', 'DepartmentController@showDepartmentMembers');
// $app->get('departments/{dept_id}/members', 'DepartmentController@showMembersByDepartment1');

// //length would either be full or brief
// $app->get('departments/{dept_id}/members/{length}', 'DepartmentController@showMembersByDepartment');
// //show the department chairs for every single department
// $app->get('departmentchairs/list', 'DepartmentController@showAllDepartmentChairs');
// $app->get('departments/{dept_id}/members/email/{email}', 'DepartmentController@showPersonInDepartment');

//Routes for AcademicDepartments
$app->get('academic_departments', 'AcademicDepartmentController@showAllAcademicDepartments');
$app->get('academic_departments/{dept_id}', 'AcademicDepartmentController@showSpecificAcademicDepartment');
$app->get('academic_departments/{dept_id}/members/{length}', 'AcademicDepartmentController@showAllMembers');
$app->get('academic_departments/{dept_id}/member/{email}', 'AcademicDepartmentController@showDeptSpecificPerson');
$app->get('academic_departments/department_chairs/list', 'AcademicDepartmentController@showAllDepartmentChairs');

//Routes for Committees'
// $app->get('committees', 'CommitteeController@showCommittees');
// $app->get('committees/{committee_id}/members', 'CommitteeController@showMembers');
// $app->get('committees/{committee_id}', 'CommitteeController@showCommitteeMembers');





































// $app->get('departments/{dept_id}/members', 'PersonController@showSpecificMember');
// $app->get('departmentchairs/members');

// all API data routes are prefixed with /api
// $app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers'], function($app) {

// 	// academic department information
// 	// Example: /api/departments/189/people2
// 	$app->get('departments/{dept_id}/people', 'DepartmentController@showPeople');

// 	// committee information
// 	// Example: /api/committees/atc/people
// 	$app->get('committees/{committee_id}/people', 'CommitteeController@showPeople');

// });


// begin new REST-ful API


// 	academic department information
// 	Example: /academic_departments/
// $app->group(['prefix' => 'academic_departments', 'namespace' => 'App\Http\Controllers'], function($app){
// 	$app->get('/', 'AcademicDepartmentController@showAcademicDepartments');
// 	$app->get('/{dept_id}', 'AcademicDepartmentController@showAcademicDepartment');
// 	$app->get('/{dept_id}/members', 'AcademicDepartmentController@showPeople');
// //access contact info by email addresses
	// $app->get('/{dept_id}/members/{email}','AcademicDepartmentController@showDeptSpecificPerson');
// 	$app->get('/members/{email}','AcademicDepartmentController@showPerson');
// 	$app->get('/mid/{member_id}', 'AcademicDepartmentController@showPersonByMID');
// });

// $app->get('/members/{email}','AcademicDepartmentController@showPerson');

// $app->group(['prefix' => 'administrative_departments', 'namespace' => 'App\Http\Controllers'], function($app){
// 	//note: there is currently no generic information for a single department, so when
// 	//a single department is specified, the API simply shows ALL members in the department
// 	$app->get('/','AdministrativeDepartmentController@showAdministrativeDepartments');
// 	$app->get('/{dept_id}','AdministrativeDepartmentController@showPeople');
// 	$app->get('/{dept_id}/members/{email}','AdministrativeDepartmentController@showDeptSpecificPerson');
// 	$app->get('/mid/{member_id}', 'AdministrativeDepartmentController@showPersonByMID');
// });

// $app->group(['prefix' => 'committees', 'namespace' => 'App\Http\Controllers'], function($app){
// 	// committee information
// 	// Example: /committees/atc/people
// 	$app->get('/', 'CommitteeController@showCommittees');
// 	$app->get('/{committee_id}', 'CommitteeController@showCommitteeMembers');
// 	$app->get('/mid/{member_id}','CommitteeController@showCommitteesByPerson');

// });




