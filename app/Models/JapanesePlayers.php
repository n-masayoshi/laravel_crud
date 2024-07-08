<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JapanesePlayers extends Model
{
    use HasFactory;

    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 't_japanese_players';

    /**
     * モデルの属性のデフォルト値
     *
     * @var array
     */
    protected $attributes = [
        'national_team_retired_flag' => 0,
        'player_retired_flag' => 0,
    ];

    // 主キーのカラムを指定
    protected $primaryKey = 'japanese_player_id';

    /**
     * IDの自動増分を指定する
     *
     * @var bool
     */
    public $incrementing = true;

    protected $keyType = 'int';

    /**
     * 複数代入の脆弱性の対策
     * 今後、管理者画面から、選手を追加する機能を実装予定のため
     * @var array
     */
    protected $fillable =
    [
        'player_name',
        'player_age',
        'club_team_name'
    ];
}
