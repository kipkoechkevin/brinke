<?php

namespace App\Http\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $successMessage;

    public function submitForm()
    {
        $contact = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required|min:5',
        ]);

        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['phone'] = $this->phone;
        $contact['subject'] = $this->subject;
        $contact['message'] = $this->message;

        Mail::to('hello@brinkesolutions.co.ke')->send(new ContactEmail($contact));

        $this->successMessage = ' We received your message successfully and we will get back to you shortly';

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
