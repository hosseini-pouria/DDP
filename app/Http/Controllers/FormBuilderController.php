<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\AbstractFactory\FormBuilder\FromUIFactoryInterface;

class FormBuilderController extends Controller
{
    private FromUIFactoryInterface $formUIBuilder;

    /**
     * @param FromUIFactoryInterface $formUIBuilder
     */
    public function __construct(FromUIFactoryInterface $formUIBuilder)
    {
        $this->formUIBuilder = $formUIBuilder;
    }

    public function output(Request $request)
    {
        $button = $this->formUIBuilder->createButton();
        $textInput = $this->formUIBuilder->createTextInput();
        $textArea = $this->formUIBuilder->createTextArea();
        $radioButton = $this->formUIBuilder->createRadioButton();

        return view('form', compact('button', 'textInput', 'textArea', 'radioButton'));
    }
}
