<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\Message;
use Livewire\Component;

class HomeComponent extends Component
{
    protected $listeners = ['chatid'];

    protected $isOpen = false;
    protected $userChats = null;

    public function chatid(int $chatid)
    {
        // dd($chatid);
        $this->userChats = Chat::with('message')->where('user_id',$chatid);
        $this->isOpen = true;

    }
    public function user2($id)
    {
        $users2 = Chat::with('message')->where('user_id',$id);
        return $users2;
    }
    public function render()
    {
        $users = Message::with('user', 'chat')->where('auth_id', auth()->user()->id)->get();
        // $chats = Chat::with('user')->get();
        // $query=DB::select('select cu.first_name,ma.first_name, m.message from chats c
        // join messages m on c.id=m.chat_id
        // join users cu on c.user_id=cu.id
        // join users ma on m.auth_id=ma.id
        // where ma.id=10');

        return view('livewire.home-component', ['users' => $users, 'user_chats' => $this->userChats, 'isOpen' => $this->isOpen])->layout('layout');
    }
}
