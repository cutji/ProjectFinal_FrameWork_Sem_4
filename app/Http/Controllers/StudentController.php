<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function cekObject()
    {
        $student = new Student();

        dump($student);
    }

    public function insert()
    {
        $student = new Student();

        $student->nim = '2020573010044';
        $student->nama = 'Muhammad Rizky Safdila';
        $student->tanggal_lahir = '2002-08-30';
        $student->ipk = 3.91;

        $student->save();

        dd($student);
    }

    public function massAssignment()
    {
        Student::create([
            'nim' => '19021044',
            'nama' => 'Rudi Permana',
            'tanggal_lahir' => '2000-08-22',
            'ipk' => 2.5,
        ]);
        return "Berhasil diproses";
    }

    public function massAssignment2()
    {
        $student1 = Student::create([
            'nim' => '19002032',
            'nama' => 'Rina Kumala Sari',
            'tanggal_lahir' => '2000-06-28',
            'ipk' => 3.4,
        ]);
        dump($student1);

        $student2 = Student::create([
            'nim' => '18012012',
            'nama' => 'James Situmorang',
            'tanggal_lahir' => '1999-04-02',
            'ipk' => 2.7,
        ]);
        dump($student2);

        $student3 = Student::create([
            'nim' => '19005011',
            'nama' => 'Riana Putria',
            'tanggal_lahir' => '2000-11-23',
            'ipk' => 2.9,
        ]);
        dump($student3);
    }

    public function update()
    {
        $student = Student::find(1);
        $student->tanggal_lahir = '2001-01-01';
        $student->ipk = 2.9;
        
        $student->save();

        dump($student);
    }

    public function updateWhere()
    {
        $student = Student::where('nim', '19002032')->first();
        $student->tanggal_lahir = '2001-12-31';
        $student->ipk = 4.0;

        $student->save();

        dump($student);
    }

    public function massUpdate()
    {
        Student::where('nim', '19021044')->first()->update([
            'tanggal_lahir' => '2000-04-20',
            'ipk' => 2.1
        ]);
        return "Berhasil diproses";
    }

    public function delete()
    {
        $student = Student::find(2);
        $student->delete();
        
        dump($student);
    }

    public function destroy()
    {
        $student = Student::destroy(3);
        dump($student);
    }
    
    public function massDelete()
    {
        $student = Student::where('ipk', '>', 2)->delete();
        dump($student);
    }
}
