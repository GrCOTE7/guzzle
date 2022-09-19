<?php

/**
 * (ɔ) Online FORMAPRO - 2022.
 */

function getUsers(): array
{
	return req('select * from users');
}

function getUser(int $id): array
{
	return req('select * from users where id=?', [$id]);
}