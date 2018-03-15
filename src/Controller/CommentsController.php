<?php

namespace App\Controller;

class CommentsController extends AppController
{
  public function index()
  {
    $comments = $this->Comments->find();
    $this->set(compact('comments'));
  }

  public function view($id = null)
  {
      $comment = $this->Comments->findById($id)->first();
      $this->set(compact('comment'));
  }

  public function add()
  {
      $comment = $this->Comments->newEntity();
      if ($this->request->is('post')) {
          $comment = $this->Comments->patchEntity($comment, $this->request->getData());
          if ($this->Comments->save($comment)) {
              $this->Flash->success(__('Your comment has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to add your comment.'));
      }
      $this->set('comment', $comment);
  }

  public function edit($id = null)
  {
      $comment = $this->Comments->findById($id)->first();
      if ($this->request->is(['post', 'put'])) {
          $this->Comments->patchEntity($comment, $this->request->getData());
          if ($this->Comments->save($comment)) {
              $this->Flash->success(__('Your comment has been updated.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to update your comment.'));
      }

      $this->set('name', $name);
  }
}
