# サッカー選手図鑑
## 構成(とりあえず)
- 国、クラブチームのタグ(nav-bar)をヘッダーに作る。</br>
    - 初期表示は、とりあえず、国一覧にする。
    - 国
        - 選手名(player_name), 年齢(age), 所属チーム(club_team_name)

    - クラブ
        - クラムチーム名(club_team_name)
            - 選手名(player_name), 年齢(age), 国名(country_name)

# TODO
- [ ] データ登録の仕方
    - [ ] 国テーブル(m_country)を作成
        - [ ] 選手名(player_name), 年齢(age), 所属チーム(club_team_name)カラムの作成
- [ ] データ取得・表示
- [ ] 国一覧ページの作成
- [ ] クラブチーム一覧ページの作成

#### 国(Country)：m_country
- 国名(country_name)
- プレイヤー(player_name)
    - クラブチーム()
    - age
    - position
    - 代表通算ゴール数
    - 代表通算アシスト数
    - 過去の所属クラブチーム
- W杯優勝回数

#### クラブチーム(ClubTeam)：m_club_team
- プレイヤー一覧(m_player)
    - 国
    - age
    - position
    - 通算ゴール数
    - 通算アシスト数
    - 過去の所属チーム
- プレイヤー数
- リーグ優勝回数
