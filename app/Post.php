<?php


//use Illuminate\Database\Eloquent\Model;

namespace App;

use Carbon\Carbon;
use App\User;

class Post extends Model
{
	public function comments() {

		return $this->hasMany(Comment::class);
	}


	public function user()
    {

    	return $this->belongsTo(User::class);
    }

	public function addComment($body) {

    Comment::create([
      'body' => request('body'),
      'post_id' => $this->id,
      'user_id' => auth()->id()
      ]);




	//	$this->comments()->create(compact('body'));

	}

	public function scopeFilter($query, $filters) {



    	$posts = Post::latest()->get();


      if ($month = $filters['month']) {

            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }


       if ($year = $filters['year']) {

            $query->whereMonth('created_at', $year);
       }




       
	}

       public static function archives() {

       	return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
           ->groupBy('year','month')
           ->orderByRaw('min(created_at) desc')
           ->get()
            ->toArray();

       }

       public function tags() {

          return $this->belongsToMany(Tag::class);

       }
}




//class Post extends Model
//{
//    protected $fillable = ['title','body'];
//}
//above was previous code