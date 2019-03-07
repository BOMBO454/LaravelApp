<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use InstagramScraper\Instagram;

class CatModel extends Model
{
	public static function findByTag($tag='cat',$count=10)
	{
		$instagram = new \InstagramScraper\Instagram();
		$medias = $instagram->getMediasByTag($tag, $count);
		$urls = [];
		foreach ($medias as $value) {
			$urls[] = $value->getImageHighResolutionUrl();
		}
		return $urls;
	}
	// echo "Media info:\n";
	// echo "Id: {$media->getId()}\n";
	// echo "Shortcode: {$media->getShortCode()}\n";
	// echo "Created at: {$media->getCreatedTime()}\n";
	// echo "Caption: {$media->getCaption()}\n";
	// echo "Number of comments: {$media->getCommentsCount()}";
	// echo "Number of likes: {$media->getLikesCount()}";
	// echo "Get link: {$media->getLink()}";
	// echo "High resolution image: {$media->getImageHighResolutionUrl()}";
	// echo "Media type (video or image): {$media->getType()}";
	// $account = $media->getOwner();
	// echo "Account info:\n";
	// echo "Id: {$account->getId()}\n";
	// echo "Username: {$account->getUsername()}\n";
	// echo "Full name: {$account->getFullName()}\n";
	// echo "Profile pic url: {$account->getProfilePicUrl()}\n";
}
