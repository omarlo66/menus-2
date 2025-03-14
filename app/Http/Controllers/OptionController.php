namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    public function edit()
    {
        $options = Option::pluck('value', 'key')->toArray();
        return view('admin.options.edit', compact('options'));
    }

    public function update(Request $request)
    {
        $data = $request->only(['restaurant_name', 'phone', 'address', 'slogan', 'about', 'logo']);

        foreach ($data as $key => $value) {
            Option::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'تم تحديث معلومات الموقع بنجاح!');
    }
}
