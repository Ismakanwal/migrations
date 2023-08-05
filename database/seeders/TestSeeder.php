<?php

namespace Database\Seeders;
use App\Models\Teacher;
use App\Models\Parente;
use App\Models\Student;
use App\Models\Meeting;
use App\Models\Transporation;
use App\Models\Attendance;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
       
        // Permission::create(['name' => 'create sign-up-form','guard_name'=>'web']);
        // Permission::create(['name' => 'create-profile','guard_name'=>'web']);
        // Permission::create(['name' => 'request meeting','guard_name'=>'web']);
        // Permission::create(['name' => 'create-progress-track','guard_name'=>'web']);

        // // create roles and assign created permissions

        
        // $role->givePermissionTo(['create sign-up-form','create-profile']);

        // $role->givePermissionTo(['request meeting','create-progress-track']);
        // // create roles and assign created permissions

        $role = Role::create(['name' => 'admin']);
     
        $role = Role::create(['name' => 'teacher']);

        $role = Role::create(['name' => 'parent']);
       
        $role = Role::create(['name' => 'child']);
      
        
 
        $user1 = new User;
        $user1->name = 'admin';
        $user1->email = 'admin@gmail.com';
        $user1->password = Hash::make('admin123');
        $user1->save();
        $user1->assignRole(['admin']);

        $user2 = new User;
        $user2->name = 'teacher';
        $user2->email = 'teacher@gmail.com';
        $user2->password = Hash::make('teacher123');
        $user2->save();
        $user2->assignRole(['teacher']);
 

        $user3 = new User;
        $user3->name = 'parent';
        $user3->email = 'parent@gmail.com';
        $user3->password = Hash::make('parent123');
        $user3->save();
        $user3->assignRole(['parent']);
 

        $user4 = new User;
        $user4->name = 'parent2';
        $user4->email = 'parent2@gmail.com';
        $user4->password = Hash::make('parent1234');
        $user4->save();
        $user4->assignRole(['parent']);

        
        $user5 = new User;
        $user5->name = 'child';
        $user5->email = 'child@.com';
        $user5->password = Hash::make('child123');
        $user5->save();
        $user5->assignRole(['child']);

        $user6 = new User;
        $user6->name = 'child2';
        $user6->email = 'child2@.com';
        $user6->password = Hash::make('child1234');
        $user6->save();
        $user6->assignRole(['child']);


       $teacher=new Teacher;
       $teacher->Total_year_exprience='3';
       $teacher->user_id='2';
       $teacher->save();

       $student=new Student;
       $student->degree='SE';
       $student->user_id='5';
       $student->save();


       $student=new Student;
       $student->degree='cs';
       $student->user_id='6';
       $student->save();

        $psrent =new Parente;
        $psrent->CNIC='2243635';  
        $psrent->user_id='3';
        $psrent->student_id='1';
      $psrent->save();

        $psrent =new Parente;
        $psrent->CNIC='23842373635';  
        $psrent->user_id='4';
        $psrent->student_id='2';
        $psrent->save();

        $meeting =new Meeting;
        $meeting->teacher_id='1';
        $meeting->parente_id='1';
        $meeting->Meeting_title='Studnt progress';
        $meeting->Meeting_date='2023-08-15';
        $meeting->Meeting_time="10:00:00";
        $meeting->purpose="student improvemnt";
        $meeting->save();

        $trans =new Transporation;
        $trans->contact_detail='Muhala Ali abad';
        $trans->date='2023-08-15';
        $trans->transportation_type='Van';
        $trans->total_present='23';
        $trans->student_id='1';
        $trans->save();

        $attendence=new Attendance;
        $attendence->student_id='1';
        $attendence->Date='12/8/2';
        $attendence->Status='prasent';
        $attendence->save();

        $attendence1=new Attendance;
        $attendence1->student_id='1';
        $attendence1->Date='12/8/3';
        $attendence1->Status='prasent';
        $attendence1->save();

        $attendence2=new Attendance;
        $attendence2->student_id='1';
        $attendence2->Date='12/8/4';
        $attendence2->Status='prasent';
        $attendence2->save();

        $attendence3=new Attendance;
        $attendence3->student_id='1';
        $attendence3->Date='12/8/4';
        $attendence3->Status='absent';
         $attendence3->save();

        $attendence4=new Attendance;
        $attendence4->student_id='2';
        $attendence4->Date='12/8/2';
        $attendence4->Status='prasent';
         $attendence4->save();

        $attendence5=new Attendance;
        $attendence5->student_id='2';
        $attendence5->Date='12/8/3';
        $attendence5->Status='prasent';
        $attendence5->save();

        $attendence6=new Attendance;
        $attendence6->student_id='2';
        $attendence6->Date='12/8/4';
        $attendence6->Status='prasent';
        $attendence6->save();

        $attendence7=new Attendance;
        $attendence7->student_id='2';
        $attendence7->Date='12/8/4';
        $attendence7->Status='absent';
        $attendence7->save();
      
       
    }

}
