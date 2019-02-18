<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
	use softDeletes;

	protected $table="tb_quote";

	protected $primerykey="id";

	protected $guarded=[];
}
