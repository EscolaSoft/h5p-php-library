<?php

/**
 * File info?
 */

namespace H5P;

/**
 * Interface needed to handle storage and export of H5P Content.
 */
interface FileStorage {

  /**
   * Store the library folder.
   *
   * @param array $library
   *  Library properties
   */
  public function saveLibrary($library);

  /**
   * Store the content folder.
   *
   * @param string $source
   *  Path on file system to content directory.
   * @param int $id
   *  What makes this content unique.
   */
  public function saveContent($source, $id);

  /**
   * Remove content folder.
   *
   * @param int $id
   *  Content identifier
   */
  public function deleteContent($id);

  /**
   * Creates a stored copy of the content folder.
   *
   * @param string $id
   *  Identifier of content to clone.
   * @param int $newId
   *  The cloned content's identifier
   */
  public function cloneContent($id, $newId);

  /**
   * Get path to a new unique tmp folder.
   *
   * @return string
   *  Path
   */
  public function getTmpPath();

  /**
   * Fetch content folder and save in target directory.
   *
   * @param int $id
   *  Content identifier
   * @param string $target
   *  Where the content folder will be saved
   */
  public function exportContent($id, $target);

  /**
   * Fetch library folder and save in target directory.
   *
   * @param array $library
   *  Library properties
   * @param string $target
   *  Where the library folder will be saved
   */
  public function exportLibrary($library, $target);

  /**
   * Save export in file system
   *
   * @param string $source
   *  Path on file system to temporary export file.
   * @param string $filename
   *  Name of export file.
   */
  public function saveExport($source, $filename);

  /**
   * Removes given export file
   *
   * @param string $filename
   */
  public function removeExport($filename);
}