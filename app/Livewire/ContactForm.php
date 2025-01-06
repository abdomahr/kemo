<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $message;

    // Validation rules
    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        // Validate the inputs
        $this->validate();

        // Create a new contact record
        Contact::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        // Flash a success message to the session
        session()->flash('success', 'Your message has been sent successfully.');

        // Reset the form fields
        $this->reset();
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
