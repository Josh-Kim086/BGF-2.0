public function store(Request $request)
{
    dd($request->all());
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required'
    ]);

    ContactMessage::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'subject' => $request->subject,
        'message' => $request->message,
        'type' => 'contact',
        'status' => 'new'
    ]);

    return back()->with('success','Message sent successfully!');
}