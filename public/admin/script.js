$(function() {
  // Initialize draggable
  $('.task').draggable({
    containment: '.board',
    cursor: 'move',
    revert: 'invalid',
    zIndex: 9999,
    helper: function() {
      // Create a visible clone for dragging
      const original = $(this);
      const helper = original.clone().css({
        'width': original.outerWidth(),
        'opacity': 0.8,
        'pointer-events': 'none',
        'background-color': 'rgba(43, 182, 115, 0.2)',
        'box-shadow': '0 4px 15px rgba(0,0,0,0.2)'
      });
      return helper;
    },
    start: function(event, ui) {
      $(this).addClass('dragging');
    },
    stop: function() {
      $(this).removeClass('dragging');
    }
  });

  // Initialize droppable
  $('.column').droppable({
    accept: '.task',
    hoverClass: 'droppable-hover',
    tolerance: 'pointer',
    over: function(event, ui) {
      $(this).addClass('highlight');
    },
    out: function(event, ui) {
      $(this).removeClass('highlight');
    },
    drop: function(event, ui) {
      const dragged = ui.draggable;
      const newStatus = $(this).data('status');
      
      // Remove all status classes and add the new one
      dragged.removeClass('active pending hold reject')
             .addClass(newStatus);
      
      // Update the task's data-status attribute
      dragged.attr('data-status', newStatus);
      
      // Update the left border color
      dragged.css('border-left-color', getStatusColor(newStatus));
      
      // Append to new column
      $(this).find('.column-content').append(dragged);
      
      // Remove highlight
      $(this).removeClass('highlight');
    }
  });

  // Helper function to get status color
  function getStatusColor(status) {
    const colors = {
      'active': '#4bc0c0',
      'pending': '#ff9f40',
      'hold': '#9966ff',
      'reject': '#ff4757'
    };
    return colors[status] || '#2bb673';
  }
});