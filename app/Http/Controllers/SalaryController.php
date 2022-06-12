<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use App\Models\Employee;
use App\Models\Vacation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class SalaryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return BinaryFileResponse
     * @throws \PhpOffice\PhpWord\Exception\Exception
     */
    public function store(): BinaryFileResponse
    {
        $firstName = Employee::all()->pluck('firstName')->toArray();
        $lastName = Employee::all()->pluck('lastName')->toArray();
        $all = Employee::all()->pluck('salary')->toArray();

        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText('Employee first names:', array('name' => 'Arial', 'size' => 20, 'bold' => true));
        $section->addText(implode(",", $firstName), array('name' => 'Arial', 'size' => 18, 'italic' => true));
        $section->addText('Employee last names:', array('name' => 'Arial', 'size' => 20, 'bold' => true));
        $section->addText(implode(",", $lastName), array('name' => 'Arial', 'size' => 18, 'italic' => true));
        $section->addText('Employee salaries:', array('name' => 'Arial', 'size' => 20, 'bold' => true));
        $section->addText(implode(",", $all), array('name' => 'Arial', 'size' => 18, 'italic' => true));
        $objWriter = IOFactory::createWriter($phpWord);
        $objWriter->save('Appdividend.docx');
        return response()->download(public_path('Appdividend.docx'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function sendSalaryEmail(): JsonResponse
    {
        $details = [
            'title' => 'Interview invite',
            'body' => 'Hi, salaries had been sent.'];

        \Mail::to('rkrumova97@gmail.com')->send(new MyTestMail($details));

        return response()->json('Email is Sent.');
    }
}
