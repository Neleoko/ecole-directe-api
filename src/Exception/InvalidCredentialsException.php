<?php
/*
 * Ce fichier fait partie du ecole-directe-api.
 *
 * (c) redbull
 *
 * Pour les informations complètes sur les droits d'auteur et la licence,
 * veuillez consulter le fichier LICENSE qui a été distribué avec ce code source.
 */


namespace Studoo\Api\EcoleDirecte\Exception;

class InvalidCredentialsException extends \Exception
{
    protected $message = "Invalid credentials";
}