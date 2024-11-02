namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NotifyMail;

class SendEmailController extends Controller
{
    public function send()
    {
        Mail::to('receiver@example.com')->send(new NotifyMail());

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again later.');
        } else {
            return response()->success('Great! Successfully sent your mail.');
        }
    }
}
