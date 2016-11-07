<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','name','description','price','featured','recommend','tags'];
    
    //Criando relacionamento entre as tabelas
    public function images() {
        return $this->hasMany('CodeCommerce\ProductImage');
    }
    
    public function category() {
        return $this->belongsTo('CodeCommerce\Category');
    }
    
    public function tags() {
        return $this->belongsToMany('CodeCommerce\Tag');
    }
    
    //começando o método com get e terminando com Attribute, subentende-se que será um atributo, podendo accessar como:
    //$p->nameDescription; ou $p->name_description;
    public function getNameDescriptionAttribute() {
        return $this->name." - ".$this->description;
    }
    
    public function getTagListAttribute() {
        $tags = $this->tags->lists('name')->toArray();
        return implode(",", $tags);
    }

    //Métodos com 'scope' na frente significa para o Laravel uma consulta no banco de dados
    public function scopeFeatured($query){
        return $query->where('featured','=','yes');
    }

    public function scopeRecommend($query){
        return $query->where('recommend','=','yes');
    }

    //Métodos com 'scopeOf' na frente significa para o Laravel uma consulta no banco, podendo colocar o segundo parâmetro, como no exemplo $type
    public function scopeOfCategory($query, $type){
        return $query->where('category_id','=', $type);
    }
}