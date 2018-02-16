<?php

namespace App\Http\Controllers\Page;

use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Message;



class WallMessageController extends Controller
{
    /**
     * Post new message.
     *
     * @param CreateMessageRequest $request
     * @return  view with variable:
     * $messages - collection messages
     * $edit - flag user can edit message
     * $delete - flag user can delete message
     */

    public function index()
    {   if(Auth::user()) {
           $edit = Auth::user()->premission()->first()->update;
           $delete = Auth::user()->premission()->first()->delete;
        }
        $messages = Message::latest()->paginate(7);
        return view('page.wall', compact('messages','edit','delete'));
    }


    /**
     * Post new message.
     *
     * @param CreateMessageRequest $request
     * @return RedirectResponse
     */

    public function store(CreateMessageRequest $request)
    {

        if(Auth::user()->message()->create($request->all()))
        {
            return redirect()->route('index')
                ->with('mes_success', trans('wall_messages.message_add'));
        }
        else
        {
            return redirect()->route('index')
                ->with('mes_error', trans('wall_messages.cannot_add_message'));
        }

    }

    /* is ajax method update message
     * @request $request
     * @return bool
     */
    public function update(Request $request)
    {
        $message = Message::find($request->mes_id);
        if((Auth::user()->ia_admin)or($message->user_id==Auth::user()->id)) {
            $message->text = $request->text;
            $message->touch();
            $message->save;
            return trans('wall_messages.message_update');
        }
        else die;
    }

    /* is ajax method delete message
     * @request $request
     * @return bool
     */
    public function destroy(Request $request)
    {   $message= Message::find($request->mes_id);
        if((Auth::user()->ia_admin)or($message->user_id==Auth::user()->id))
        {
            $message = Message::find($request->mes_id);
            if ($message->delete())
                return trans('wall_messages.message_deleted');
            else die;
        }
        else die;
    }
}
