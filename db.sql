-- Adminer 4.8.1 PostgreSQL 13.4 dump

DROP TABLE IF EXISTS "item";
CREATE TABLE "public"."item" (
    "id" integer NOT NULL,
    "todo_list_id" integer NOT NULL,
    "name" character varying(255) NOT NULL,
    "content" text NOT NULL,
    "created_at" timestamp(0) NOT NULL,
    CONSTRAINT "item_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "uniq_1f1b251e5e237e06" UNIQUE ("name")
) WITH (oids = false);

CREATE INDEX "idx_1f1b251ee8a7dcfa" ON "public"."item" USING btree ("todo_list_id");
INSERT INTO "item" ("id", "todo_list_id", "name", "content", "created_at") VALUES
(7,	1,	'item_7',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-27 21:34:05'),
(8,	1,	'item_8',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-28 21:34:05'),
(9,	1,	'item_9',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-29 21:34:05'),
(12,	2,	'item_12',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-22 21:34:05'),
(10,	1,	'item_10',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-30 21:34:05'),
(2,	1,	'item_2',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-22 21:34:05'),
(3,	1,	'item_3',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-23 21:34:05'),
(4,	1,	'item_4',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-24 21:34:05'),
(5,	1,	'item_5',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-25 21:34:05'),
(6,	1,	'item_6',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-26 21:34:05'),
(1,	1,	'item_1',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-21 21:35:00'),
(11,	2,	'item_11',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-21 21:35:00'),
(13,	2,	'item_13',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-23 21:34:05'),
(14,	2,	'item_14',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-24 21:34:05'),
(15,	2,	'item_15',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-25 21:34:05'),
(16,	2,	'item_16',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-26 21:34:05'),
(17,	2,	'item_17',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-27 21:34:05'),
(18,	2,	'item_18',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-28 21:34:05'),
(19,	2,	'item_19',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-29 21:34:05'),
(20,	2,	'item_20',	'Emensis itaque difficultatibus multis et nive obrutis callibus plurimis ubi prope Rauracum ventum est ad supercilia fluminis Rheni, resistente multitudine Alamanna pontem suspendere navium conpage Romani vi nimia vetabantur ritu grandinis undique convolantibus telis, et cum id inpossibile videretur, imperator cogitationibus magnis attonitus, quid capesseret ambigebat.',	'2021-12-30 21:34:05');

DROP TABLE IF EXISTS "todo_list";
CREATE TABLE "public"."todo_list" (
    "id" integer NOT NULL,
    "user_id" integer NOT NULL,
    CONSTRAINT "todo_list_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "uniq_1b199e07a76ed395" UNIQUE ("user_id")
) WITH (oids = false);

INSERT INTO "todo_list" ("id", "user_id") VALUES
(1,	1),
(2,	2);

DROP TABLE IF EXISTS "user";
CREATE TABLE "public"."user" (
    "id" integer NOT NULL,
    "firstname" character varying(255) NOT NULL,
    "lastname" character varying(255) NOT NULL,
    "email" character varying(255) NOT NULL,
    "birthday" date NOT NULL,
    "password" character varying(255) NOT NULL,
    CONSTRAINT "user_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "user" ("id", "firstname", "lastname", "email", "birthday", "password") VALUES
(1,	'John',	'Doe',	'johndoe@exemple.com',	'1997-01-01',	'johndoe'),
(2,	'Ronan',	'Trouillard',	'ronantrouillard@example.com',	'1997-05-01',	'ronantrouillard'),
(3,	'Alexander',	'Marks',	'alexandermarks@example.com',	'1997-01-12',	'alexandermarks');

ALTER TABLE ONLY "public"."item" ADD CONSTRAINT "fk_1f1b251ee8a7dcfa" FOREIGN KEY (todo_list_id) REFERENCES todo_list(id) NOT DEFERRABLE;

ALTER TABLE ONLY "public"."todo_list" ADD CONSTRAINT "fk_1b199e07a76ed395" FOREIGN KEY (user_id) REFERENCES "user"(id) NOT DEFERRABLE;

-- 2021-12-29 22:42:02.001139+00
