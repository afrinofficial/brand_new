<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\calculator;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    protected $calculations;
    public function home()
    {
        return view('front.home.home');
    }

    public function calculator()
    {
        return view('front.home.calculator');
    }

    public function result(Request $request)
    {
        $firstNumber = $request->input('first_number');
        $operator = $request->input('operator');
        $secondNumber = $request->input('second_number');

        switch ($operator) {
            case '+':
                $result = $firstNumber + $secondNumber;
                break;
            case '-':
                $result = $firstNumber - $secondNumber;
                break;
            case '*':
                $result = $firstNumber * $secondNumber;
                break;
            case '/':
                $result = $firstNumber / $secondNumber;
                break;
            default:
                $result = 'Invalid operator';
        }

        // Save the calculation to the database using the Calculator model
        Calculator::create([
            'first_number' => $firstNumber,
            'second_number' => $secondNumber,
            'result' => $result,
        ]);

        // Retrieve all calculations from the database
        $this->calculations = Calculator::all();

        return view('front.home.calculatorresult', [
            'calculations' => $this->calculations,
            'result' => $result, // Pass the result to the view if needed
        ]);
    }
}
