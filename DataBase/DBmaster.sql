SET SESSION FOREIGN_KEY_CHECKS=0;


/* Create Tables */

CREATE TABLE cake_sessions
(
	id varchar(255) NOT NULL COMMENT 'id',
	data text NOT NULL COMMENT 'データ',
	expires int COMMENT 'expires',
	PRIMARY KEY (id)
) COMMENT = 'cakeセッション';


CREATE TABLE dbo_m_allowances
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 名称
	name varchar(255) NOT NULL COMMENT '名称 : 名称',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '手当マスタ';


CREATE TABLE dbo_m_banks
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 名前
	name varchar(255) COMMENT '名前 : 名前',
	-- 支店名
	siten_name varchar(255) NOT NULL COMMENT '支店名 : 支店名',
	-- 口座種類
	kouza varchar(30) NOT NULL COMMENT '口座種類 : 口座種類',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '銀行マスタ';


CREATE TABLE dbo_m_clients
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 会社ID
	dbo_m_companies_id int NOT NULL COMMENT '会社ID : 会社ID',
	-- 名前
	name varchar(255) NOT NULL COMMENT '名前 : 名前',
	-- 会社名かな
	name_kana varchar(255) COMMENT '会社名かな : 会社名かな',
	-- 住所
	addr varchar(255) COMMENT '住所 : 住所',
	-- 電話番号
	-- 
	tel varchar(30) COMMENT '電話番号 : 電話番号
',
	-- FAX番号
	fax varchar(30) COMMENT 'fax番号 : FAX番号',
	-- id
	dbo_m_days_id_cutoff int NOT NULL COMMENT '締め日ID : id',
	-- id
	dbo_m_days_id_pay int NOT NULL COMMENT '支払い日 : id',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '顧客マスタ';


CREATE TABLE dbo_m_companies
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 名前
	name varchar(255) COMMENT '名前 : 名前',
	-- 住所
	addr varchar(255) COMMENT '住所 : 住所',
	-- 会社名かな
	name_kana varchar(255) COMMENT '会社名かな : 会社名かな',
	-- 電話番号
	-- 
	tel varchar(30) COMMENT '電話番号 : 電話番号
',
	-- FAX番号
	fax varchar(30) COMMENT 'fax番号 : FAX番号',
	-- id
	dbo_m_banks_id int NOT NULL COMMENT '銀行ID : id',
	-- 口座番号
	account_num varchar(30) NOT NULL COMMENT '口座番号 : 口座番号',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '会社情報マスタ';


CREATE TABLE dbo_m_days
(
	-- id
	id int NOT NULL AUTO_INCREMENT COMMENT 'id : id',
	-- 名前
	name varchar(255) COMMENT '名前 : 名前',
	-- 日にち
	day varchar(30) COMMENT '日にち : 日にち',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '日にちマスタ';


CREATE TABLE dbo_m_keycodes
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 名称
	name varchar(255) COMMENT '名称 : 名称',
	-- キーコード
	Keycode smallint NOT NULL UNIQUE COMMENT 'キーコード : キーコード',
	PRIMARY KEY (id)
) COMMENT = 'ファンクションキー情報テーブル';


CREATE TABLE dbo_m_manages
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 権限名
	name text NOT NULL COMMENT '権限名 : 権限名',
	-- 権限レベル
	level tinyint NOT NULL COMMENT '権限レベル : 権限レベル',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '権限情報マスタ';


CREATE TABLE dbo_m_nominals
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 名称
	name varchar(255) NOT NULL COMMENT '名称 : 名称',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '名目マスタ';


CREATE TABLE dbo_m_staffs
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 会社ID
	dbo_m_companies_id int NOT NULL COMMENT '会社ID : 会社ID',
	-- 名字
	family_name varchar(30) NOT NULL COMMENT '名字 : 名字',
	-- 名前
	first_name varchar(30) NOT NULL COMMENT '名前 : 名前',
	-- 名字かな
	family_name_kana varchar(30) COMMENT '名字かな : 名字かな',
	-- 名前かな
	first_name_kana varchar(30) COMMENT '名前かな : 名前かな',
	-- 電話番号
	-- 
	tel varchar(30) COMMENT '電話番号 : 電話番号
',
	-- 携帯電話番号
	h_tel varchar(30) COMMENT '携帯電話 : 携帯電話番号',
	-- 住所
	addr varchar(255) COMMENT '住所 : 住所',
	fuyo_num tinyint COMMENT '扶養人数',
	-- 生年月日
	birthday date COMMENT '生年月日 : 生年月日',
	-- id
	dbo_m_days_id int NOT NULL COMMENT '給与支払い日 : id',
	-- id
	dbo_m_banks_id int NOT NULL COMMENT '銀行ID : id',
	-- 口座番号
	account_num varchar(30) NOT NULL COMMENT '口座番号 : 口座番号',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = 'スタッフマスタ';


CREATE TABLE dbo_t_attendances
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- id
	dbo_m_companies_id int NOT NULL COMMENT '会社ID : id',
	-- id
	dbo_m_staffs_id int NOT NULL COMMENT 'スタッフID : id',
	-- id
	dbo_t_matters_id int NOT NULL COMMENT '案件ID : id',
	-- 請求ID
	dbo_t_claims_id int COMMENT '請求ID : 請求ID',
	-- 勤務日
	service_day date NOT NULL COMMENT '勤務日 : 勤務日',
	-- 作業開始時間
	time_start time NOT NULL COMMENT '開始時間 : 作業開始時間',
	-- 作業終了時間
	time_end time NOT NULL COMMENT '終了時間 : 作業終了時間',
	-- 休憩時間開始
	interval_start time COMMENT '休憩時間開始 : 休憩時間開始',
	-- 休憩時間終了
	interval_end time COMMENT '休憩時間終了 : 休憩時間終了',
	-- 合計勤務時間
	time_total float NOT NULL COMMENT '合計勤務時間数 : 合計勤務時間',
	-- 残業時間数
	time_overtime float NOT NULL COMMENT '残業時間数 : 残業時間数',
	-- 深夜残業時間数
	time_latetime float NOT NULL COMMENT '深夜残業時間数 : 深夜残業時間数',
	-- 休憩時間
	time_interval float COMMENT '休憩時間 : 休憩時間',
	-- 売上金額
	sales int NOT NULL COMMENT '売上金額 : 売上金額',
	-- 支払金額
	pay int NOT NULL COMMENT '支払金額 : 支払金額',
	-- 請求金額　課税
	seikyu_kazei int COMMENT '請求金額　課税 : 請求金額　課税',
	-- 請求金額　非課税
	seikyu_hikazei int COMMENT '請求金額　非課税 : 請求金額　非課税',
	-- 手当１
	teate1 int COMMENT '手当１ : 手当１',
	-- 手当２
	teate2 int COMMENT '手当２ : 手当２',
	-- 手当３
	teate3 int COMMENT '手当３ : 手当３',
	-- 手当の詳細１
	dbo_m_allowances_id1 int COMMENT '手当詳細１ : 手当の詳細１',
	-- 手当詳細２
	dbo_m_allowances_id2 int COMMENT '手当詳細２ : 手当詳細２',
	-- 手当詳細３
	dbo_m_allowances_id3 int COMMENT '手当詳細３ : 手当詳細３',
	-- 遅刻フラグ
	tardy_flg boolean COMMENT '遅刻フラグ : 遅刻フラグ',
	-- 欠勤フラグ
	absence_flg boolean COMMENT '欠勤フラグ : 欠勤フラグ',
	-- 備考
	comment varchar(1024) COMMENT '備考 : 備考',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '勤怠テーブル';


CREATE TABLE dbo_t_claims
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 会社ID
	dbo_m_companies_id int NOT NULL COMMENT '会社ID : 会社ID',
	-- id
	dbo_m_clients_id int NOT NULL COMMENT '顧客マスタID : id',
	-- 請求金額（税抜）
	price int NOT NULL COMMENT '請求金額税抜 : 請求金額（税抜）',
	-- 算出開始日
	calc_start date NOT NULL COMMENT '算出開始日 : 算出開始日',
	-- 算出終了日
	calc_end date NOT NULL COMMENT '算出終了日 : 算出終了日',
	-- 請求日
	seikyu_day date NOT NULL COMMENT '請求日 : 請求日',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '請求締め情報テーブル';


CREATE TABLE dbo_t_functionkeys
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 名称
	name varchar(255) COMMENT '名称 : 名称',
	-- キーコードID
	dbo_m_keycodes_id int NOT NULL COMMENT 'キーコードID : キーコードID',
	-- id
	dbo_t_matters_id int NOT NULL COMMENT '案件マスタID : id',
	-- ユーザマスタID
	users_id int NOT NULL COMMENT 'ユーザマスタID : ユーザマスタID',
	PRIMARY KEY (id)
) COMMENT = 'ファンクションキー情報テーブル';


CREATE TABLE dbo_t_matters
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 会社ID
	dbo_m_companies_id int NOT NULL COMMENT '会社ID : 会社ID',
	-- クライアントid
	dbo_m_clients_id int NOT NULL COMMENT '顧客ID : クライアントid',
	-- 名前
	name varchar(255) NOT NULL COMMENT '名前 : 名前',
	-- 住所
	addr varchar(255) COMMENT '住所 : 住所',
	-- 電話番号
	-- 
	tel varchar(30) COMMENT '電話番号 : 電話番号
',
	-- 作業開始時間
	time_start time COMMENT '開始時間 : 作業開始時間',
	-- 作業終了時間
	time_end time COMMENT '終了時間 : 作業終了時間',
	-- 休憩時間開始
	interval_start time COMMENT '休憩時間開始 : 休憩時間開始',
	-- 休憩時間終了
	interval_end time COMMENT '休憩時間終了 : 休憩時間終了',
	-- 日給フラグ　Tで日給
	nikyu_flg boolean COMMENT '日給フラグ : 日給フラグ　Tで日給',
	-- 請求単価
	price_seikyu int NOT NULL COMMENT '請求単価 : 請求単価',
	-- 支払い単価
	price_siharai int NOT NULL COMMENT '支払い単価 : 支払い単価',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '案件テーブル';


CREATE TABLE dbo_t_payments
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 会社ID
	dbo_m_companies_id int NOT NULL COMMENT '会社ID : 会社ID',
	-- スタッフID
	dbo_m_staffs_id int NOT NULL COMMENT 'スタッフID : スタッフID',
	-- 給与金額
	kyuyo int NOT NULL COMMENT '給与金額 : 給与金額',
	-- 締日
	sime_day date NOT NULL COMMENT '締日 : 締日',
	-- 算出開始日
	calc_start date NOT NULL COMMENT '算出開始日 : 算出開始日',
	-- 算出終了日
	calc_end date NOT NULL COMMENT '算出終了日 : 算出終了日',
	-- 支払日
	siharai_day date NOT NULL COMMENT '支払日 : 支払日',
	-- 雇用保険控除金額
	koyo_hoken int NOT NULL COMMENT '雇用保険控除金額 : 雇用保険控除金額',
	-- 健康保険控除金額
	kenko_hoken int NOT NULL COMMENT '健康保険控除金額 : 健康保険控除金額',
	-- 介護保険控除金額
	kaigo_hoken int NOT NULL COMMENT '介護保険控除金額 : 介護保険控除金額',
	-- 厚生年金控除金額
	kose_nenkin int NOT NULL COMMENT '厚生年金控除金額 : 厚生年金控除金額',
	-- 所得税控除金額
	syotokuzei int NOT NULL COMMENT '所得税 : 所得税控除金額',
	-- 交通費手当
	koutsuhi int NOT NULL COMMENT '交通費手当 : 交通費手当',
	-- その他手当
	teate int NOT NULL COMMENT 'その他手当 : その他手当',
	-- 総支給金額
	sousikyu int NOT NULL COMMENT '総支給 : 総支給金額',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = '支払締めテーブル';


CREATE TABLE users
(
	-- id
	id int NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'id : id',
	-- 会社ID
	dbo_m_companies_id int NOT NULL COMMENT '会社ID : 会社ID',
	-- ユーザ名
	username varchar(50) NOT NULL UNIQUE COMMENT 'ユーザ名 : ユーザ名',
	-- パスワード
	password varchar(50) NOT NULL UNIQUE COMMENT 'パスワード : パスワード',
	-- 表示用スタッフ名
	staff_name varchar(128) NOT NULL COMMENT '表示用スタッフ名 : 表示用スタッフ名',
	-- 権限情報ID
	dbo_m_manages_id int NOT NULL COMMENT '権限情報ID : 権限情報ID',
	-- 削除フラグ
	delate boolean COMMENT '削除フラグ : 削除フラグ',
	-- 処理を実行した日
	created datetime NOT NULL COMMENT '作成日 : 処理を実行した日',
	-- 更新日
	modified datetime NOT NULL COMMENT '更新日 : 更新日',
	PRIMARY KEY (id)
) COMMENT = 'ログイン情報テーブル';



/* Create Foreign Keys */

ALTER TABLE dbo_m_companies
	ADD FOREIGN KEY (dbo_m_banks_id)
	REFERENCES dbo_m_banks (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_m_staffs
	ADD FOREIGN KEY (dbo_m_banks_id)
	REFERENCES dbo_m_banks (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_claims
	ADD FOREIGN KEY (dbo_m_clients_id)
	REFERENCES dbo_m_clients (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_matters
	ADD FOREIGN KEY (dbo_m_clients_id)
	REFERENCES dbo_m_clients (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_m_clients
	ADD FOREIGN KEY (dbo_m_companies_id)
	REFERENCES dbo_m_companies (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_m_staffs
	ADD FOREIGN KEY (dbo_m_companies_id)
	REFERENCES dbo_m_companies (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_attendances
	ADD FOREIGN KEY (dbo_m_companies_id)
	REFERENCES dbo_m_companies (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_claims
	ADD FOREIGN KEY (dbo_m_companies_id)
	REFERENCES dbo_m_companies (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_matters
	ADD FOREIGN KEY (dbo_m_companies_id)
	REFERENCES dbo_m_companies (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_payments
	ADD FOREIGN KEY (dbo_m_companies_id)
	REFERENCES dbo_m_companies (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE users
	ADD FOREIGN KEY (dbo_m_companies_id)
	REFERENCES dbo_m_companies (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_m_clients
	ADD FOREIGN KEY (dbo_m_days_id_pay)
	REFERENCES dbo_m_days (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_m_clients
	ADD FOREIGN KEY (dbo_m_days_id_cutoff)
	REFERENCES dbo_m_days (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_m_staffs
	ADD FOREIGN KEY (dbo_m_days_id)
	REFERENCES dbo_m_days (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_functionkeys
	ADD FOREIGN KEY (dbo_m_keycodes_id)
	REFERENCES dbo_m_keycodes (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE users
	ADD FOREIGN KEY (dbo_m_manages_id)
	REFERENCES dbo_m_manages (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_attendances
	ADD FOREIGN KEY (dbo_m_staffs_id)
	REFERENCES dbo_m_staffs (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_payments
	ADD FOREIGN KEY (dbo_m_staffs_id)
	REFERENCES dbo_m_staffs (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_attendances
	ADD FOREIGN KEY (dbo_t_claims_id)
	REFERENCES dbo_t_claims (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_attendances
	ADD FOREIGN KEY (dbo_t_matters_id)
	REFERENCES dbo_t_matters (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_functionkeys
	ADD FOREIGN KEY (dbo_t_matters_id)
	REFERENCES dbo_t_matters (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE dbo_t_functionkeys
	ADD FOREIGN KEY (users_id)
	REFERENCES users (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;



