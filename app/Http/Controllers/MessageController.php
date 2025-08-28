<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Formulaire contact (frontend)
    public function create()
    {
        return view('contact');
    }

    // Envoi du formulaire
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create($request->all());

        return redirect()->back()->with('success', 'Message envoyé avec succès !');
    }

    // Liste des messages (admin)
    public function index()
    {
        $messages = Message::latest()->get();
        return view('admin.messages.index', compact('messages'));
    }

    // Afficher un message en détail
    public function show(Message $message)
    {
        return view('admin.messages.show', compact('message'));
    }

    // Supprimer un message
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Message supprimé');
    }
}
