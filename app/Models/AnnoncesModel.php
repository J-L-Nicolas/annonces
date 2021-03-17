<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AnnoncesModel extends Model{
    protected $table = 'annonces';
    protected $allowedFields = ['idAnnonces ','idUserAnnonce','idCategoryAnnonce','nameAnnonce','moreAnnonce','priceAnnonce','dateCreateAnnonce'];
}